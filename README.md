# QPhalcon Framework (q-phalcon)


[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


**Note:** ```PHP``` ```Phalcon``` ```Framework```




# summary
　　这是一个基于Phalcon的高性能PHP框架，简称QP！
Phalcon是PHP的一个C扩展，虽然它不约束项目结构，但对于团队来说，没有规范，不成方圆！
而QP是长期开发经验的结晶，它规范了项目结构，统一开发风格，为多人协作、系统升级和维护带来极大的好处！

###### 以下是QP的特性：

  * 支持Composer，您可以方便的添加第三方组件到项目中
  * 支持更强大的命名空间定义，加上强大的Composer工具，灵活适应特殊项目
  * 扩展了Phalcon框架的路由，支持模块开发
  * 增强异常处理，调试更加容易
  * 规范配置路径，更容易的使用配置参数
  * 规范日志路径和内容，写日志更方便
  * 支持不同类型的多个数据库连接(包括Redis)，操作数据库更方便
  * 支持中间件
  * QP强力推荐使用Redis数据库存储会话


　　整个QP框架只有 100KB 左右，如果您想了解QP的设计思想，完全可以轻松阅读所有源码！
你可以这么理解什么是QP框架：因为Phalcon不限制项目结构，不利于新手使用。因此QP就是为PHP新手搭建Phalcon项目结构，增强Phalcon功能的。
在QP框架中，您必须要阅读QP基础文档，在实践开发中，您依然需要翻阅大量Phalcon官方文档和活跃在Phalcon社区！

###### 以下是QP v1.0.0 版本功能上不足之处：

  * QP文档正在编写中...
  * 定时任务和脚本模块正在开发中...
  * 用户自定义异常处理模块正在考虑有没有必要开发？希望广大粉丝留言反馈...




# Install

使用Composer工具安装项目(如果还有安装Composer，请自行搜索如何安装)

Via Composer

``` bash
$ composer create-project q-phalcon/q-phalcon My_Project_Name
```

You must be add php extension of phalcon to php configure file(php.ini)
[How to install phalcon][link-Download_Phalcon]

If you use the Redis database, You must be add php extension of redis to php configure file.
[Download Redis for linux][link-Download_Redis]
Of course,the PHP extension of Redis on windows system has been provide! please search by youself!


# Document

Sorry, 文档正在更新中...敬请期待




# Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.




# Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.




# Security

If you discover any security related issues, please email qvil_yong@163.com instead of using the issue tracker.




# Credits

- [Qvil Young][link-author]
- [All Contributors][link-contributors]




# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.




[ico-version]: https://img.shields.io/packagist/v/q-phalcon/q-phalcon.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/q-phalcon/q-phalcon.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/q-phalcon/q-phalcon
[link-downloads]: https://packagist.org/packages/q-phalcon/q-phalcon
[link-author]: https://github.com/Qvil-Young
[link-contributors]: ../../contributors
[link-Download_Phalcon]: https://phalconphp.com/en/download
[link-Download_Redis]: http://redis.io/download
