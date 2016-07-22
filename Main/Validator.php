<?php

namespace Yunhack\PHPValidator\Main;

class Validator
{
    private $data;

    private $rules;

    private $messages;

    private $customAttributes;

    private $convertType;

    public function __construct(array &$data, array $rules, array $messages, array $customAttributes, array $convertType)
    {
        $this->data = $data;
        $this->rules = $rules;
        $this->messages = $messages;
        $this->customAttributes = $customAttributes;
        $this->convertType = $convertType;
    }
}