# Domain Checker 域名监测系统

系统功能：对域名进行监控，一旦监测到域名可注册会向指定邮箱发送邮件提醒。

## Require
    PHP >= 5.6.4
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension
    XML PHP Extension
## Install 
```bash
git clone https://github.com/bestony/DomainChecker.git
cd DomainChecker 
composer update 
cp .env.example .env
php artisan key:generate
php artisan migrate
```
修改.env的配置项
```
DB_HOST=数据库IP，默认localhost或127.0.0.1
DB_PORT=数据库端口，默认3306
DB_DATABASE=数据库名
DB_USERNAME=用户名
DB_PASSWORD=密码
DM_AK=填写阿里云的Access Key ID
DM_SK=填写阿里云的Access Key Secret	
DM_SENDER=填写阿里云的发信地址
DM_SENDER_NAME=填写发信人姓名，限制英文，不得有空格
OWNERMAIL=填写接受邮件提醒的邮箱
```

## 监控设置
在[阿里云监控](https://cms.console.aliyun.com/#/sites/)中新建一个站点监控,配置如下，

其中监控频率就是你的域名监控频率，建议单点监控，15分钟。以免影响主机性能
![sp161026_025157.png](https://ooo.0o0.ooo/2016/10/25/580fa9f3a9358.png)
