# PHP-Validator (yunhack/php-validator)


[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]


**Note:** ```PHP``` ```Parameter``` ```Validator```


# 简介

　　用过Laravel下Validator组件的同学都知道，它做的不太强壮和准确！不过取其精华：

### 1. 送上示例代码~~~

```php
<?php 
use Yunhack\PHPValidator\Validator;

    Validator::make($param, [
        'uuid' => 'present|alpha_num|length:32',
        'money' => 'float_str|to_type:scale:2',
        'time' => 'date_format:Y-m-d',
    ]);
    
    if (Validator::has_fails()) {
        echo Validator::error_msg();
    } else {
        echo "参数正确！"
    }
?>
```

### 2. 组件只对外暴露3个方法~~~

 * void make()：创建参数校验规则！
    * 必填参数1：array 被校验的参数数组
    * 必填参数2：array 校验规则
    * 可选参数3：array 自定义错误文案

 * bool has_fails()：参数是否校验通过？

 * string error_msg()：错误信息

### 3. 简单讲解示例代码

 * 针对参数'uuid'的校验规则：'present|alpha_num|length:32'
    * present：参数必传且不能为空
    * alpha_num：参数的值由字母和数字组成
    * length: 参数长度必须为32位

 * 针对参数'money'的校验规则：'float_str|to_type:scale:2'
    * 不存在present规则的情况下，如果参数未参入，就放以下的规则校验，如果传入，才继续！
    * float_str：参数必须是小数形式的字符串
    * to_type：校验通过后，将参数类型转换成 保留2位小数

* 针对参数'time'的校验规则：'date_format:Y-m-d'
    * 当参数传入的情况下，继续校验如下规则
    * date_format：参数必须符合日期格式 Y-m-d

### 4. 语言包

　　默认的语言(英文)位于：~/vendor/yunhack/php-validotar/Common/Lang.php

　　我们提供了一个中文语言包的备份：~/vendor/yunhack/php-validotar/bak/zh_cn.php

　　默认的语言文件不可修改和替换，如果要自己制定语言包，可以配置：~/vendor/yunhack/php-validotar/config.php

```php
    'lang' => 'lang/php-validator/zh_cn.php'
```

### 5. 自定义文案

```php
<?php 
use Yunhack\PHPValidator\Validator;

    Validator::make($param, [
        'title' => 'present',
    ],[
        'title.present' => '标题不能为空'
    ]);
    
    if (Validator::has_fails()) {
        echo Validator::error_msg();
    } else {
        echo "参数正确！"
    }
?>
```

　　如果参数校验不通过，中文语言包文案为：参数 'title' 不存在

　　但是，这里已经自定义文案了，所以文案是：标题不能为空

### 6. Validator支持的所有校验：

```php
    'present' => "参数 '{parameter-name}' 不存在",
    'alpha' => "参数 '{parameter-name}' 不是全字母",
    'num' => "参数 '{parameter-name}' 不是全数字",
    'alpha_num' => "参数 '{parameter-name}' 不是由数字、字母组成",
    'alpha_dish' => "参数 '{parameter-name}' 不是由字母、数字、下划线和短横线组成",
    'var' => "参数 '{parameter-name}' 不是一个有效变量名",
    'ip' => "参数 '{parameter-name}' 不是合法的IP地址",
    'url' => "参数 '{parameter-name}' 不是合法的URL",
    'email' => "参数 '{parameter-name}' 不是合法的邮箱地址",
    'mobile' => "参数 '{parameter-name}' 不是合法的手机号",
    'json' => "参数 '{parameter-name}' 不是正确的JSON结构",
    'timestamp' => "参数 '{parameter-name}' 不是有效的时间戳",
    'date_format' => "参数 '{parameter-name}' 不是规范的日期格式，或日期已超出范围",
    'regex' => "参数 '{parameter-name}' 不符合正则表达式规则",
    'string' => "参数 '{parameter-name}' 不是字符串类型",
    'boolean' => "参数 '{parameter-name}' 不是布尔值类型",
    'integer' => "参数 '{parameter-name}' 不是整数类型",
    'float' => "参数 '{parameter-name}' 不是浮点数类型",
    'array' => "参数 '{parameter-name}' 不是数组类型",
    'object' => "参数 '{parameter-name}' 不是 ",
    'object_of' => "参数 '{parameter-name}' 不是 '{bind-value_1}' 对象类型",
    'integer_str' => "参数 '{parameter-name}' 不是有效的整数",
    'float_str' => "参数 '{parameter-name}' 不是有效的浮点数",
    'numeric_str' => "参数 '{parameter-name}' 不是有效的数字",
    'array_str' => "参数 '{parameter-name}' 不是有效的数组字符串",
    'max' => "参数 '{parameter-name}' 的值太大",
    'length_max' => "参数 '{parameter-name}' 的长度过长",
    'min' => "参数 '{parameter-name}' 的值太小",
    'length_min' => "参数 '{parameter-name}' 的长度过短",
    'length' => "参数 '{parameter-name}' 的长度不是 '{bind-value_1}'",
    'between' => "参数 '{parameter-name}' 的值不在 '{bind-value_1}' 和 '{bind-value_2}' 之间",
    'length_between' => "参数 '{parameter-name}' 的长度不在 '{bind-value_1}' 和 '{bind-value_2}' 之间",
    'in' => "参数 '{parameter-name}' 的值不在: '{bind-value_1}' 当中",
    'not_in' => "参数 '{parameter-name}' 的值在： '{bind-value_1}' 当中",
    'filled' => "当传入参数 '{parameter-name}' 时，其值不能为空",
    'distinct' => "在数组参数 '{parameter-name}' 中,存在重复的值",
    'different' => "参数 '{parameter-name}' 和参数 '{bind-value_1}' 一样",
    'same' => "参数 '{parameter-name}' 和参数 '{bind-value_1}' 不一样",
    'required_with' => "当参数 '{bind-value_1}' 不为空时，参数 '{parameter-name}' 不能为空",
    'required_with_all' => "参数 '{parameter-name}' 不能为空",
    'required_without' => "当参数 '{bind-value_1}' 为空时，参数 '{parameter-name}' 不能为空",
    'required_without_all' => "参数 '{parameter-name}' 不存在",
    'file_exists' => "指定的文件不存在",
    'file_type_in' => "文件的类型必须如下: {bind-value_1}",
    'file_max' => "文件大小最大为 {bind-value_1}M",
    'file_min' => "文件大小最小为 {bind-value_1}M",
    'file_size_between' => "文件大小只能在 {bind-value_1}M 和 {bind-value_2}M 之间",
```
　　


# Install

　　使用Composer工具安装项目(composer工具的安装和用法请自行学习)

Via Composer

``` bash
$ composer require yunhack/php-validator
```

# License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.




[ico-version]: https://img.shields.io/packagist/v/yunhack/php-validator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/yunhack/php-validator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/yunhack/php-validator
[link-downloads]: https://packagist.org/packages/yunhack/php-validator
[link-Download_Phalcon]: https://phalconphp.com/en/download
[link-Download_Redis]: http://redis.io/download
