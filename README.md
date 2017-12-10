# simple-MVC-frame
simple MVC frame for learning PHP

### 简介

该框架使用PHP编写，采用了MVC的设计模式。

此外还具有一下特点：

1. 可移植性，按照部署说明可以在Apache、Nginx上运行，兼容windows和linux平台。
2. 安全性，所有的输入数据都可以通过Request类进行过滤，防止xss攻击。
3. 生产和开发隔离，通过简单配置可以让系统自动在生产环境和开发环境使用不同的配置信息和数据库。
4. 丰富的数据库操作方法，移植了CI框架的数据库操作类，并做了优化，可以同时操作多个数据库。
5. 前端采用了smarty框架，可以实现前后开发的分离。


### 部署说明：

webapp作为站点的根目录


### Apache服务器
想要优雅的使用url，可以将下面的配置可以写到.htaccess或者服务器配置文件中。
配置完成之后，可以使用site.com/class/action替代site.com/index.php/class/action

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```
### Nginx服务器

```
location  ~ ^(.+\.php)(.*)$ {
    fastcgi_pass   127.0.0.1:9000;
    fastcgi_index  index.php;
    fastcgi_split_path_info ^(.+\.php)(.*)$;
    fastcgi_param  SCRIPT_FILENAME /var/www/website/webapp$fastcgi_script_name;
    fastcgi_param  PATH_INFO      $fastcgi_path_info;
    include        fastcgi_params;
}
```
