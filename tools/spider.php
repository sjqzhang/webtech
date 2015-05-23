<?php
if(!is_window()){
    define("PHPQUERY_PATH","/usr/local/phpquery/");
} else {
    define("PHPQUERY_PATH","C:/Program Files/phpquery/");
}
define("SAVE_DIR",'/mnt/edriver/wenku/51cto');

include_once(PHPQUERY_PATH."phpQuery/phpQuery.php");






function init($argv){

/*
    $opts = getopt('u:f:d:r:s:h:o:c:m:t:',
        array(
            'debug'
        ));
*/

$opts=array();

for($i=0;$i<count($argv);$i++){

	if(substr( $argv[$i],0,1)=='-') {
        if(!isset($argv[$i+1]))  {
            $argv[$i+1]='';
        }
		$opts[substr( $argv[$i],1)]= preg_replace('/^\'|\'$|^\"|\"$/','', $argv[$i+1]);

	}

}


    foreach($opts as $k => $v){

        switch($k){

        case 's':
            define("SELECTOR",$v);
            break;
        case 'n':
            define("NODE",$v);
            break;
	    case 'a':
            define("ALL",$v);
            break;
        case 'l':
            define("LOCAL_IMG",$v);
            break;
        case 'j':
            define("JS",$v);
            break;
		case 't':
            define("TPL",$v);
            break;
        case 'm':
            define("MATCH",$v);
            break;
        case 'c':
            define("CONTAINER",$v);
            break;
        case 'd':
            define("DIR",$v);
            break;
        case 'f':
            define("FILTER", $v);
            break;
        case 'r':
            define("RANGE",$v);
            break;
        case 'u':
            define("URL",$v);
            break;
        case 'o':
            define("OUT",$v);
            break;
        case 'debug':
            define("DEBUG",true);
            break;
        case 'h' or 'help':
            help();
            exit(0);
            break;


        }

    }


    if(!defined("CONTAINER")) {

        define("CONTAINER","");
    }
    if(!defined("DEBUG")) {
        define("DEBUG",false);
    }
    if(!defined("LOCAL_IMG")) {
        define("LOCAL_IMG",0);
    }
    if(!defined("FILTER")) {
        define("FILTER",'');
    }
    if(!defined("JS")) {
        define("JS",1);
    }
    if(!defined("NODE")) {
        define("NODE",0);
    }
	if(!defined("ALL")) {
        define("ALL",0);
    }
	if(defined("TPL")) {
		echo TPL;
		$tpl=read(TPL);
		if(!empty($tpl)){
			 define("TPLCONTENT",$tpl);
		} else {
			 define("TPLCONTENT","");
		}
    }




    print_r(FILTER);
    mkdirs("/tmp/spider");

    print_r($opts);

    //print_r(defined("SELECTOR"));

     if(!defined("DIR")){
        define("DIR",SAVE_DIR);

        if(!is_dir(DIR)){
            mkdirs(DIR);
        }
     }else {

         mkdirs(DIR);
     }

     if(!defined("OUT")){

         define("OUT",".html");
     }


     if(!defined("URL")){
         help();
         exit(0);
     }

}

init($argv);


function file_get_content($url) {
	return curl_download($url);
}

function is_window(){
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        return true;
    } else {
        return false;
    }


}

function mkdirs($dir){
    return is_dir($dir) or (mkdirs(dirname($dir)) and mkdir($dir, 0777));
}



function help(){

    $h=<<<eot
-u URL
-c Contain url Container
-m url match
-f url not match (filter)
-d save dir
-t template
-s selector
-r range
-j enable js (1:enable 0:disable default:1)
-l local imge (0:webimg 1:local default:0)
-a all page in document (0:one page 1:all page default:0)
-n node download img (0:php download 1:node download default:0)
-h help

example:

51cto

php spider.php -u "http://developer.51cto.com/col/1308/list_1308_{r}.htm" -r '1,125' -m '/art/' -f 'abc'  -s '#content' -d '/mnt/edriver/wenku/51cto'

cnblog

php spider.php -u "http://www.cnblogs.com/xiaocen/default.html?page={r}&OnlyTitle=1" -r '1,12' -c '.postTitle' -m '.html' -f 'EditPosts'  -s '#cnblogs_post_body' -d '/mnt/edriver/wenku/cnblogs'



eot;

echo $h;

}

function phpQueryCli($markup, $callQueue) {
    $pq = phpQuery::newDocument($markup);
    $method = null;
    $params = array();
    foreach($callQueue as $param) {
        if (strpos($param, '--') === 0) {
            if ($method) {
                $pq = call_user_func_array(array($pq, $method), $params);
            }
            $method = substr($param, 2);	// delete --
            $params = array();
        } else {
            $param = str_replace('\n', "\n", $param);
            $params[] = strtolower($param) == 'null'
                ? null
                : $param;
        }
    }
    if ($method)
        $pq = call_user_func_array(array($pq, $method), $params);
    if (is_array($pq))
        foreach($pq as $v)
            print $v;
    else
        print $pq."\n";
    //var_dump($pq);
}


function write($content,$fn='./result.txt')
{
    $fp= fopen($fn,'w+');
    fwrite($fp,$content);
    fclose($fp);
}

function read($fn='./result.txt')
{
    $fp= fopen($fn,'r');
    $content=fread($fp,filesize($fn));
    fclose($fp);
	return $content;
}

$document=null;

function href_replace($href,$abs_url,$rela_url){
    $url=$ABSOLUTE_URL;
    $href=$href[0];
    if(substr($href,0,4)=='href'&&!strpos($href,'http://')){
        if(substr($href,0,7)=='href="/'){
            return str_replace('href="/','href="'.$abs_url.'/', $href);
        } else {
            return str_replace('href="','href="'.$rela_url, $href);
        }
    }
    if(substr($href,0,3)=='src'&&!strpos($href,'http://')){
        if(substr($href,0,6)=='src="/'){
            return str_replace('src="/','src="'.$abs_url.'/', $href);
        } else {
            return str_replace('src="','src="'.$rela_url, $href);
        }
    }

    return $href;
}

function prefix_url($url){

    preg_match('/https?:\/\/[^\/]+\/?/',$url,$match);
    $ret= isset($match[0])? $match[0]:'';
    if(substr($ret,strlen($ret)-1)=='/'){
        return substr($ret,0,strlen($ret)-1);
    } else {
        return $ret;
    }


}
function suffix_url($url){

    return substr($url,0 , strripos($url,'/')?strripos($url,'/')+1:strlen($url));

}

function C($url) {
    $ABSOLUTE_URL=prefix_url($url);
    $RELATIVE_URL=suffix_url($url);

    $content='';
    if(substr($url,0,4)=='http'){
        $content=file_get_content($url);
        if(empty($content)) {
            echo "html is empty\n";
        }
        $content=html2utf8($content);
        $content=url_replace($content,$ABSOLUTE_URL,$RELATIVE_URL);
    }
    return $content;
}

function url_replace($content,$abs_url,$rela_url){

    preg_match('/<base\s*href="([^"]*)"/',$content,$m);


    if(isset($m[1])){
        $rela_url=$m[1];
    }


    $content= preg_replace('/<base[^>]*>|<\/base>/','',$content);

    $pattens=array(
        '/src="\//i',
        '/href="\//i',
        '/href="#/i',
        '/href="(?!http)([^"]*)"/i',
        '/href=\'(?!http)([^\']*)\'/i',
        '/src="(?!http)([^"]*)"/i',
        '/src=\'(?!http)([^\']*)\'/i',

    );

    $replaces=array(
        'src="'.$abs_url.'/',
        'href="'.$abs_url.'/',
        'href="#/',
        'href="'.$rela_url.'\1"',
        'href=\''.$rela_url.'\1\'',
        'src="'.$rela_url.'\1"',
        'src="'.$rela_url.'\1"',

    );


    //$content=preg_replace('/\<script[^\>]*><!--[^>]*\/\/-->[^\>]*?\<\/script\>/i','',$content);
    $content=preg_replace('/<script.*?(?<=show_ads)[^>]*>[\s\r\n\t]*<\/script>/im','',$content);
    if(!JS) {
        $content=preg_replace('/<script.*?>[\s\S]*?<\/script>/is','',$content);
    }
    //echo $content;

    return preg_replace($pattens,$replaces,$content);

}

function html2utf8($content){
       preg_match('/<meta.*charset="?([a-zA-Z0-9-]+)"?/i',$content,$match);
    if(!isset($match[1])){
        preg_match('/charset="?([a-zA-Z0-9-]+)"?/i',$content,$match);
    }
    if(isset( $match[1])){
        if(strtolower( $match[1])!='utf-8'){
            $pattens=array(
                '/charset="([a-zA-Z0-9-]+)"/i',
                '/charset=([a-zA-Z0-9-]+)"/i',

            );
            $replaces=array(
                ' charset="utf-8" ',
                ' charset=utf-8"',
            );
            $content= preg_replace($pattens,$replaces,$content);
            if(strtolower($match[1])=='gb2312'){
                $match[0]='gbk';
            }
            $content= iconv($match[1].'//IGNORE','utf-8//IGNORE',$content);
        }
    }

      $content=  preg_replace('/<head[^>]*?>/','<head>',$content);
    return $content;
}
function D($url,$selector=null) {
    $ABSOLUTE_URL=prefix_url($url);
    $RELATIVE_URL=suffix_url($url);

    //echo "$url\n";
    $content='';
    if(substr($url,0,4)=='http'){
        $content=C($url);
        $doc=phpQuery::newDocument($content);
    } else {
        $doc=phpQuery::newDocument($url);
    }
    if(empty($selector)){
        return $doc;
    } else {
        return $doc->find($selector);
    }
}


function get_html_frame($tpl,$content,$title=''){


    $frame=<<<eot
        <!DOCTYPE html>
        <html>
        <meta http-equiv=Content-Type content="text/html;charset=utf-8">
        <head>
        <title>{$title}</title>
        </head>

        <body>
            $content
        </body>

        </html>
eot;


    $patterns=array(
        '/\{title\}/',
        '/\{body\}/'

    );

    $replaces=array(
        $title,
        $content
    );

    return  preg_replace($patterns,$replaces,$tpl);






}

function filename_replace($fn){


    return preg_replace('/\:|\"|\|\<|\>\*|\.|\?|\/|\*|\>|<|\\\|\'|\\n|\t|\\r|[\r]*/','',$fn);

}

function make_html_tpl($html){


	$ABSOLUTE_URL=prefix_url($html);
    $RELATIVE_URL=suffix_url($html);


    if(substr($html,0,4)=='http'){
        $html=file_get_contents($html);
        $html=url_replace($html,$ABSOLUTE_URL,$RELATIVE_URL);
    }
    $frame=<<<eot
        <!DOCTYPE html>
        <html>
        <meta http-equiv=Content-Type content="text/html;charset=utf-8">
        <head>
        <title>{title}</title>
        </head>

        <body style="text-align:left; background: #fff;">
           <div style="padding:10px;" > {body} </div>
        </body>

        </html>
eot;

    $patterns=array(
        '/<title[^>]*>[\s\S]*<\/title>/im',
        '/<body[^>]*>[\s\S]*<\/body>/im',

    );

    $replaces=array(
        '<title>{title}</title>',
        '<body style="text-align:left;background:#fff">{body}</body>',

    );

    $tpl= preg_replace($patterns,$replaces,$html);


	if(defined("TPLCONTENT")){
		$tpl=TPLCONTENT;
	} else if(empty($tpl)){
       $tpl=$frame;
    } else {
	   $tpl=html2utf8($tpl);
	}



    return $tpl;

}


$RESULT='';




function check($href,$title)
{


//    $filter=preg_split('/\||\,/',FILTER);


    if(strpos($title,'评论')===false||strpos($title,'阅读')===false){

        return true;

    }

}

function curl_download($url) {


    $cmd='curl  -c ./cookie.txt -b ./cookie.txt -o- '.$url;

    $content=  shell_exec($cmd);
    return $content;



}

function download_img($url,$cookie=false)
{

    //echo "download\t{$url}\n\n";
    $url = parse_url($url);

    $result='';
    $query = $url['path']."?".(isset( $url['query'])?$url['query']:'');

    $fp = fsockopen( $url['host'], isset($url['port'])?$url['port']:80 , $errno, $errstr, 30);
    if (!$fp) {
        return false;
    } else {
        $request = "GET $query HTTP/1.1\r\n";
        $request .= "Host: {$url['host']}\r\n";
        $request .= "Referer: {$url['host']}\r\n";
        $request .= "Connection: Close\r\n";
        if($cookie) $request.="Cookie:   $cookie\n";
        $request.="\r\n";
        fwrite($fp,$request);
        while(!feof($fp)) {
            $result .= @fgets($fp, 1024);
        }
        fclose($fp);
        if(!empty($result))
        {
            $body= stristr($result,"\r\n\r\n");
            $body=substr($body,4,strlen($body));
            return $body;
        }
        return $result;
    }
}

function imgtomd5($content){


  if(!LOCAL_IMG) {
    return $content;
  }

  preg_match_all('/<img.*?src="([^"]*)?"/ims',$content,$imgs);

  if(isset($imgs[1])&&is_array($imgs[1])){

      foreach($imgs[1] as $img) {


          if(!NODE) {
              $md5= md5($img);
              $content= str_replace($img,$md5,$content);
              $fn=DIR."/".$md5;
              if(!file_exists($fn)){
                  write(download_img($img),$fn);
              }
          } else {

              //$md5= md5($img);
              //$md5= file_get_contents('http://127.0.0.1:8888?url='.urlencode($img)."&dir=".urlencode(DIR));
              $md5= file_get_contents('http://127.0.0.1:8888?url='.urlencode($img));
              $content= str_replace($img,$md5,$content);
          }
      }

  }

  return $content;




}

function all_page($doc,$href,&$contents=array(),$urls=array(),$furls=array()){

	$allhref= $doc->find('a');

	$suf_url= suffix_url($href);

	$filename=str_replace($suf_url,'',$href);

	$l=strripos($filename,".")?strripos($filename,"."):strlen($filename);

	$filename= substr($filename,0,$l);

	//echo $filename."xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx\n";

	$content= $doc->find(SELECTOR);
	array_push($contents,$content);

	print_r($urls);

	echo $href."       finish\n";

	if(!in_array($href,$urls)) {

	array_push($urls,$href);
	}

    if(!in_array($href,$furls)){
	array_push($furls,$href);
	}

	foreach($allhref as $aa)
	{
		$ab= pq($aa)->attr('href');

		if(strpos($ab,"javascript:")) {
			continue;
		}

        if(strlen($ab)> strlen($href)+9) {
            continue;
        }

		if(strpos($ab,$suf_url)===false){
		} else {
			if(strpos($ab,$filename)){
				if(! in_array($ab,$urls)){
					if(strpos($ab,'_all')===false){
						array_push($urls,$ab);
					}
				}



			  // echo $ab."---------------------------------------\n";
			}


		}

	}



    $flag=false;
	foreach($urls as $u ) {
	   if($u==$href) {
		$flag=true;
		continue;
	   }
	   if($flag) {
			$href=$u;
			break;
	   }
	}



   if(count($urls)==count($furls)) {

		return;
   } else {

   	  $doc=phpQuery::newDocument(C($href));
//print_r($urls);
 echo "count----------".count($contents)."\n";
				 all_page($doc,$href,&$contents,&$urls,&$furls);


   }


/*
	if($flag) {
		  print_r($urls);
		  //echo "qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq\n";
		  print_r($furls);
		  echo $href."\n";
		  echo "count----------".count($contents)."\n";


	  } else {

		  reutrn;

		 // print_r($contents);

		//return  join( $contents);
	  }

	//print_r($urls);
	*/
}


function urls($items) {


    foreach($items as $i){

            $href= pq($i)->attr('href');

            echo $href."\n";

    }



}

function every($items){
    $tpl='';

    foreach($items as $i)
    {
        $href= pq($i)->find('a')->attr('href');
        if(empty($href)) {
            $href= pq($i)->attr('href');
        }




        $title=pq($i)->text();
        $is_website=false;
        $title=trim($title);

        if(preg_match('/^http:\/\//',$title)) {

            $is_website=true;
        }
        $title=filename_replace($title);
        $title=trim($title);


        if(trim($title)==''){
            continue;
        }



        //if(!check($href,$title)){

        //    continue;
        //}
        //
        //


        if(strpos($title,'读(')){

            continue;

        }

        $filter=FILTER;

        if(!empty($filter)&&strpos($href,$filter)){

            continue;

        }

        echo $href."\n";
        if(strpos($href,MATCH)) {
            //$content= D($href,'.post-content,.post-wrap,.Article_content,#endText,#postlist')->contents();

            $doc=phpQuery::newDocument(C($href));




			if(ALL) {
				$content=array();

			 all_page($doc,$href,$content);

			 $content=join($content);
			} else {
				$content= $doc->find(SELECTOR);
			}


            /*

            $allhref= $doc->find('a');

            foreach($allhref as $aa)
            {
                $ab= pq($aa)->attr('href');

				$p= strrpos('/',$ab);

                if(strpos($ab,'_all.htm')){
                    print_r( $ab);
                    $href=$ab;
                    $doc=D($ab);
                    break;

                }

            }

*/

           // $content= $doc->find(SELECTOR);

            if($is_website) {

                $title=$doc->find('title')->text();
                $title=filename_replace($title);
                $title=trim($title);
            }

            if(empty($tpl)){
                $tpl=make_html_tpl($href);

            }


            $content=  get_html_frame($tpl, $content,$title);


            $content=imgtomd5($content);


            if(is_window()){

                $title= iconv("utf-8","gbk",$title);
				echo $title."\n";
            }

            //error_log($content,3,'./doc/'.$title.".html");
            //write($content,'./doc/'.$title.".html");
            //$RESULT.="jq ".$href." --find '.post-wrap' > '".$title.".html' \n ";
           // exec("wkhtmltopdf './doc/{$title}.html' './pdf/{$title}.pdf'");


            echo $title."\n";

            if(OUT=='html'){
                write($content,DIR.$title.'.'.OUT);
            } else {
                write($content,DIR."/{$title}.html");
                 //exec("wkhtmltopdf -q --ignore-load-errors '/tmp/spider/{$title}.html' ".DIR."/{$title}.pdf > /dev/null");
            }

            unset($doc,$content);

        }
    }

}
//function every($items){
//    $tpl='';
//
//    foreach($items as $i)
//    {
//        $href= pq($i)->find('a')->attr('href');
//        if(empty($href)) {
//            $href= pq($i)->attr('href');
//        }
//
//
//        $title=pq($i)->text();
//        $title=filename_replace($title);
//
//        // error_log('wkhtmltopdf "'.$title.'".html --encoding utf-8 "'.$title."\".pdf\n",3,'wk.txt');
//        error_log("curl $href -k -o '$title'.html\n",3,'wk.txt');
//
//        echo $href."\n";
//
//        if(strpos($href,'/command/')) {
//            $content= D($href,'.Article_content')->html();
//            //$content= D($href,'.post-content,.post-wrap,.Article_content,#endText,#postlist')->html();
//
//            //$content= pq($content)->remove('div,.STYLE1,contains("欢迎进")')->html();
//
//           // print_r($content);
//
//
//
//            $patterns=array(
//                '/\<br\>/i',
//                '/\<p\>/i',
//        );
//
//            $replaces=array(
//            "\n",
//            "\n",
//            );
//
//
//          $content= preg_replace($patterns,$replaces,$content);
//
//          $content=  pq($content)->text();
//
//
//         $content=  preg_replace("/\\n/i",'\n\t',$content);
//
//
//            print_r($content);
//
//            //error_log($content,3,'./doc/'.$title.".html");
//            error_log($content,3,'./doc/'."linux.html");
//        }
//    }
//
//}

//write('');
//
//
//for($i=1;$i<8;$i++) {
//
//    $d=D("https://www.dockboard.org/page/".$i,".post-title");
//    every($d);
//
//}
//
//write($RESULT);

//    $d=D("https://www.dockboard.org/service-discovery-for-docker-containers/","a");
//    every($d);


//$html=file_get_contents("http://www.baidu.com");


//echo make_html_tpl($html);

//$d->each($d,array('every',array("aa")));


//var_dump($d->text());



//$d=D('http://linux.chinaitlab.com/special/linuxcom/','a');

//every($d);
//$d=D('http://bbs.meizu.cn/','a');

//every($d);


//make_html_tpl(('https://github.com/'));

//for($i=1;$i<125;$i++) {
//$d=D("http://developer.51cto.com/col/1308/list_1308_{$i}.htm",'a');
//
//every($d);
//
//}


//$d=D("http://developer.51cto.com/col/1308/",'a');
//
//every($d);
//


function enter()
{
    $r='';
    if(defined("RANGE")){
        $r=preg_split('/\,/',RANGE);
        print_r($r);
    }


    $container=CONTAINER;


    if(!defined("SELECTOR")) {

        if(!empty($r)) {
            for($i=$r[0];$i<$r[1];$i++){
                $url=  preg_replace('/\{r\}/',$i, URL);


                $d=D($url,"{$container} a");

                urls($d);

            }
        } else {

                $d=D(URL,"{$container} a");

                urls($d);

        }

        die;



    }else if(!defined("MATCH")){

		$html=	C(URL);

		//echo $html;
		//die;

		$doc=phpQuery::newDocument($html);

		if(ALL) {
		//$content=$doc->find(SELECTOR);
		$content=array();
		all_page($doc,URL,$content);
		    $content=join($content);
		} else {
			$content=$doc->find(SELECTOR);
		}
		$title=$doc->find('title')->text();

        //echo $title;
        //
        $title=filename_replace($title);

        $tpl=make_html_tpl(URL);
		//echo $tpl;
        $content=  get_html_frame($tpl, $content,$title);


        $content=imgtomd5($content);
        if(is_window()){
              $title= iconv("utf-8","gbk",$title);
        }

		 write($content,DIR."/{$title}.html");



	} else if(!empty($r)){

        for($i=$r[0];$i<$r[1];$i++){
            $url=  preg_replace('/\{r\}/',$i, URL);


            $d=D($url,"{$container}");

            every($d);

        }
    }else {

            $d=D(URL,"{$container}");

            every($d);

    }


$dir=DIR;
//exec("find {$dir}/*.html -exec wkhtmltopdf {}  {}.pdf \;");



if(is_window()) {

 $cmd="ls -Art {$dir}/*.html |xargs -i echo {} |gawk -F\".html\" '{print $1}' |xargs -i wkhtmltopdf '{}.html' '{}.pdf'";

} else {

   $cmd="ls -Art {$dir}/*.html |xargs -i echo {} |awk -F\".html\" '{print $1}' |xargs -i wkhtmltopdf '{}.html' '{}.pdf'";

}
echo $cmd."\n";


if(NODE) {


    while(true) {
        $ccc=  file_get_contents('http://127.0.0.1:8888?status=abc');

        echo  "has ".$ccc." picture not download\n";
        if($ccc=='0' ) {

            exec($cmd);


            $cmd="rm -rf {$dir}/*.html";

			echo $cmd."\n";
			break;
            if(!is_window()){
                 exec($cmd);
            }

        }
        sleep(3);
    }

} else {

    exec($cmd);
}

}

enter();

?>
