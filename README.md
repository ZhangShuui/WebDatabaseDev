Yii 2 Advanced Project Template
===============================

Yii 2 Advanced Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
developing complex Web applications with multiple tiers.

The template includes three tiers: front end, back end, and console, each of which
is a separate Yii application.

The template is designed to work in a team development environment. It supports
deploying the application in different environments.

Documentation is at [docs/guide/README.md](docs/guide/README.md).

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-advanced/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-advanced/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-advanced)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-advanced.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-advanced)

DIRECTORY STRUCTURE
-------------------

```
common
    config/              contains shared configurations
    mail/                contains view files for e-mails
    models/              contains model classes used in both backend and frontend
console
    config/              contains console configurations
    controllers/         contains console controllers (commands)
    migrations/          contains database migrations
    models/              contains console-specific model classes
    runtime/             contains files generated during runtime
backend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains backend configurations
    controllers/         contains Web controller classes
    models/              contains backend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
frontend
    assets/              contains application assets such as JavaScript and CSS
    config/              contains frontend configurations
    controllers/         contains Web controller classes
    models/              contains frontend-specific model classes
    runtime/             contains files generated during runtime
    views/               contains view files for the Web application
    web/                 contains the entry script and Web resources
    widgets/             contains frontend widgets
vendor/                  contains dependent 3rd-party packages
environments/            contains environment-based overrides
tests                    contains various tests for the advanced application
    codeception/         contains tests developed with Codeception PHP Testing Framework
```


使用步骤：
1. 下载XAMPP的8.0.x版本，使用XAMPP的Init脚本进行环境初始化
2. 拉取本框架到本地，放置于/Xampp/htdocs/目录下
3. 使用init.bat进行初始化Yii2框架
4. 在本地数据库创建一个名为yii2advanced的数据库，导入/data/advanced.sql，并确保本地mysql有一个账号为root，密码为空的账号
5. 使用`localhost:'你设置的端口'/advanced/backend/web`进入后端进行登录(默认账号test，密码testtest)，然后进入`localhost'你设置的端口'/advanced/frontend/web`即可


如果不能正常使用：
- 检查php的php.ini文件中是否打开gd,pdo_mysql等extension
- 检查apache服务器和mysql数据库是否正常运行
- 检查php.ini的字符集设置是否为UTF-8
- 检查数据库的root账号是否具有所有权限，如果仍然出问题，建议新建一个具有所有权限的数据库账号，在/common/config/main-local下修改账号和密码为新建用户，再重新尝试
