```sh

' EasyOps windows agent安装脚本
' 如果报“没有在该机执行windows脚本宿主的权限”，请在注册表将HKEY_LOCAL_MACHINE\SOFTWARE\Microsoft\Windows Script Host\Settings的Enabled值，设置为1


Dim cluster_type,download_host
cluster_type="saas"
download_host="c.download.easyops.cn"

Dim org,server_ip,proxy_ip,proxy_pem,proxy_pub,agent_pub

org="1943221257"
server_ip="community.easyops.cn"
agent_pub=""
proxy_ip=""


If proxy_ip <> "" Then
    server_ip = proxy_ip
End If

' define params
Dim install_base,agent_pkg,python_pkg,daemon_pkg
install_base="c:\easyops\"
agent_pkg="agent.zip"
python_pkg="python_windows.zip"
daemon_pkg="daemon_windows.zip"


Function IsFileExit(filepath)
    With CreateObject("Scripting.FileSystemObject")
        IsFileExit = .FileExists(filepath)
    End With
End Function

Sub RmFile(filepath)
    With CreateObject("Scripting.FileSystemObject")
        If .FileExists(filepath) then
            .DeleteFile(filepath)
        End If
    End With
End Sub

Sub Rmdir(folder)
    With CreateObject("Scripting.FileSystemObject")
        If .FolderExists(folder) Then
           .DeleteFolder(folder)
        End If
    End With
End Sub


Sub Mkdir(folder)
    With CreateObject("Scripting.FileSystemObject")
        If NOT .FolderExists(folder) Then
           .CreateFolder(folder)
        End If
    End With
End Sub


Sub Unzip(zipFile, extractTo)
    Mkdir extractTo
    printf("unzip " & zipFile)
    ' unzip can not force copy, so create tmp folder to achieve
    Rmdir extractTo & "unzip_tmp"
    Mkdir extractTo & "unzip_tmp"
    With CreateObject("Shell.Application")
        t = .NameSpace(extractTo & "unzip_tmp").CopyHere(.NameSpace(zipFile).items, 16)
        t = .NameSpace(extractTo).MoveHere(.NameSpace(extractTo & "unzip_tmp").items, 16)
    End With
    Rmdir extractTo & "unzip_tmp"
End Sub

Sub WrFile(str, filepath)
    With CreateObject("Scripting.FileSystemObject")
        Set objFile = .CreateTextFile(filepath,True)
        objFile.Write str & vbCrLf
        objFile.Close
        Set objFile = Nothing
    End With
End Sub

Sub Sed(placeholder, replaceTo, filepath)
    Const ForReading = 1
    Const ForWriting = 2
    With CreateObject("Scripting.FileSystemObject")
        Set objFile = .OpenTextFile(filepath, ForReading)
        strText = objFile.ReadAll
        objFile.Close
        strNewText = Replace(strText, placeholder, replaceTo)
        Set objFile = .OpenTextFile(filepath, ForWriting)
        objFile.Write strNewText 
        objFile.Close
        Set objFile = Nothing
    End With
End Sub


Sub Download(url, host, saveas)
    printf(url)
    With CreateObject("MSXML2.ServerXMLHTTP")
        .Open "GET", url, False
        .setRequestHeader "host:", host
        .SEnd

        RmFile saveas
        If .Status = 200 Then
            Set oStream = CreateObject("ADODB.Stream")
            oStream.Open
            oStream.Type = 1
            oStream.Write .responseBody
            oStream.SaveToFile saveas
            oStream.Close
            Set oStream = Nothing
        End If
    End With
End Sub

Sub RunCmd(shell)
    With CreateObject("WScript.Shell")
        .Run shell, 1, False
    End With
End Sub

Function printf(txt)
    WScript.StdOut.WriteLine txt
End Function

Function scanf()
    scanf = LCase(WScript.StdIn.ReadLine)
End Function

Function wait(n)
    WScript.Sleep Int(n * 1000)
End Function

Function ForceConsole()
    If InStr(LCase(WScript.FullName), vbsInterpreter) = 0 Then
        oWSH.Run vbsInterpreter & " //NoLogo " & Chr(34) & WScript.ScriptFullName & Chr(34)
        WScript.Quit
    End If
End Function

Function IsNotAdmin()
    With CreateObject("Wscript.Shell")
        IsNotAdmin = .Run("%comspec% /c net session >nul 2>&1", 0, True)
    End With
End Function

' is admin
If IsNotAdmin Then
    Wscript.Echo "must run the script by administrator or run as administrator in cmd line"
    Wscript.Quit
End If

Function HostName()
    With CreateObject("WScript.Shell")
        HostName = .ExpandEnvironmentStrings("%computername%")
    End With
End Function

' force console to show log
Set oWSH = CreateObject("WScript.Shell")
vbsInterpreter = "cscript.exe"
Call ForceConsole()

' evn ready
' to fix "could not find any physical disk"
RunCmd "diskperf -y"
Mkdir install_base
If IsFileExit(install_base & ".\daemon\DaemonSvc.exe") Then
    printf("stop first...")
    RunCmd install_base & ".\daemon\DaemonSvc.exe stop"
End If

' download file
printf("donwload file...")
If cluster_type = "private" then
    Download "http://" & server_ip & "/" & agent_pkg, download_host, install_base & "agent.zip"
    Download "http://" & server_ip & "/" & python_pkg, download_host, install_base & "python.zip"
    Download "http://" & server_ip & "/" & daemon_pkg, download_host, install_base & "daemon.zip"
Else
    Download "http://" & download_host & "/" & agent_pkg, download_host, install_base & "agent.zip"
    Download "http://" & download_host & "/" & python_pkg, download_host, install_base & "python.zip"
    Download "http://" & download_host & "/" & daemon_pkg, download_host, install_base & "daemon.zip"
End If

' Extract file
printf("extract file to c:\easyops...")
Unzip install_base & "python.zip", install_base
Unzip install_base & "agent.zip", install_base
Unzip install_base & "daemon.zip", install_base

' Modify config
printf("install and start...")
Sed "__ORGID__", org, install_base & "agent\easyAgent\conf\conf.yaml"
Sed "__SERVERIP__", server_ip, install_base & "agent\easyAgent\conf\conf.yaml"

Mkdir install_base & "agent\easyAgent\log"
Mkdir install_base & "agent\collector_agent\log"
Mkdir install_base & "agent\collector_agent\data"
Mkdir install_base & "agent\collector_agent\data\user_log_collector"
Mkdir install_base & "agent\collector_agent\data\user_log_collector\user_log"
Mkdir install_base & "agent\collector_agent\data\user_log_collector\record"

' Write bat file
WrFile ".\daemon\DaemonSvc.exe start", install_base & "start.bat"
WrFile ".\daemon\DaemonSvc.exe stop", install_base & "stop.bat"
WrFile agent_pub, install_base & "agent\rsa.pub"



' install and run
RunCmd install_base & ".\daemon\DaemonSvc.exe install"
wait(5)
RunCmd install_base & ".\daemon\DaemonSvc.exe start"


printf("success...")
printf("congratulation, " & HostName & " would be auto register in easyops, please check...")
printf("press Enter to exit")
scanf()




```