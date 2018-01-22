<?php

namespace App\Extend\Pay\YeePay;

class YeePayMPayException extends \Exception
{
    public function __construct($message, $code = 0)
    {
        // 确保所有变量都被正确赋值
        parent::__construct($message, $code);
    }

    // 自定义字符串输出的样式
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
