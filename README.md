# PHP-Validator (yunhack/php-validator)


[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


**Note:** ```PHP``` ```parameter check``` ```file check``` ```validation```




# summary
　　这是一个基于PHP 5.6以上版本的参数校验组件，作者 Qvil_Young 在使用Laravel的Validation组件后，发现其有BUG或用法不便利之处...
因此决定自己开发一个好用的组件

　　v0.0.1版本不支持数据库的唯一索引校验，后期如有需要，会迭代更新...

###### 以下是php-validator组件的特性：

  * 只需传入文件的参数名，即可进行文件大小、类型的校验
  * 在规则中添加变量类型和别名，通过校验过会转换数据类型和改变参数名
  * 准确校验PHP的各种数据类型、以及字符串形式的数据类型
  * 支持各种各样的字符串校验，如：字母、数字、字符组合，还有ip,url,email,mobile(中国地区)的校验
  * 支持多个参数之间非空的相关联性校验，空的定义如下：空数组、空字符串、NULL、变量不存在，而不包括 "0",0,false...
  * 准确判断数值大小和长度大小
  * 支持字符串形式的一维数组校验，比如："[1,2,3,4]"，并且将其转成PHP数组，数组中的元素也可以指定数据类型
  * 支持浮点数的精度控制
  * 支持多国语言、其lang.php文件可以放在项目的任意位置(通过简单的配置即可实现)

###### 以下是QP v1.0.0 版本功能上不足之处：

  * QP文档正在编写中...
  * 可能存在BUG，因为没有经过严格测试
  * 数据库接口尚未开放




# Install

使用Composer工具安装项目(如果还有安装Composer，请自行搜索如何安装)

Via Composer

``` bash
$ composer require yunhack/q-phalcon
```




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




[ico-version]: https://img.shields.io/packagist/v/yunhack/php-validator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yunhack/php-validator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yunhack/php-validator
[link-downloads]: https://packagist.org/packages/yunhack/php-validator
[link-author]: https://github.com/Qvil-Young
[link-contributors]: ../../contributors
[link-Download_Phalcon]: https://phalconphp.com/en/download
[link-Download_Redis]: http://redis.io/download
