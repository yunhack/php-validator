<?php

namespace Yunhack\PHPValidator;

class Validator
{
    private static $has_fails = false;

    private static $error_msg = "";

    public static function make(array &$data, array $rules, array $messages = [])
    {
        $validator = new Common\Validator($data, $rules, $messages);
        $validator->dissectRuleStr();

        $validator->check();
        $validator->toType();
        $validator->toAlias();
        self::$has_fails = $validator->has_fails();
        self::$error_msg = $validator->err_msg();

        $data = $validator->data();
    }

    public static function has_fails()
    {
        return self::$has_fails;
    }

    public static function error_msg()
    {
        return self::$error_msg;
    }
}
