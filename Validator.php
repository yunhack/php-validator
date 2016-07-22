<?php

namespace Yunhack\PHPValidator;

class Validator
{
    public static function make(array &$data, array $rules, array $messages = [], array $customAttributes = [], array $convertType = [])
    {
        $validator = new Main\Validator($data, $rules, $messages, $customAttributes, $convertType);
        echo "<pre>";
        var_dump($validator);
    }
}