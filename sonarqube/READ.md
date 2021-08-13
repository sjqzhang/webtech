```

docker run --name sonar-scanner -v /root/repo/dms:/usr/src --network host --rm   sonarsource/sonar-scanner-cli -Dsonar.projectKey=dms -Dsonar.sources=. -Dsonar.host.url=http://192.168.56.101:9000 -Dsonar.login=b50f150597da5342df13af04efee39277ff4cdbc


```
