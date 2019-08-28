<?php

namespace fize\crypt;

/**
 * JSON编码解码类
 * @package fize\crypt
 */
class Json
{

    /**
     * 禁止构造
     */
    private function __construct()
    {
    }

    /**
     * 对 JSON 格式的字符串进行编码
     * @param string $json 待解码的json string格式的字符串。
     * @param bool $assoc 当该参数为TRUE时，将返回array而非object。默认为true
     * @param int $depth 指定递归深度，默认为512
     * @param int $options 额外选项，如JSON_BIGINT_AS_STRING将数字做为字符串返回
     * @return mixed array/object
     */
    public static function decode($json, $assoc = true, $depth = 512, $options = 0)
    {
        return json_decode($json, $assoc, $depth, $options);
    }

    /**
     * 对变量进行 JSON 编码
     * 该函数只能接受 UTF-8 编码的数据
     * @param mixed $value 待编码的 value ，除了 resource  类型之外，可以为任何数据类型
     * @param int $options 选项
     * @param int $depth 设置最大深度
     * @return string
     */
    public static function encode($value, $options = 0, $depth = 512)
    {
        return json_encode($value, $options, $depth);
    }

    /**
     * 获取最后的错误描述
     * @return string
     */
    public static function lastErrorMsg()
    {
        return json_last_error_msg();
    }

    /**
     * 返回最后发生的错误
     * @return int
     */
    public static function lastError()
    {
        return json_last_error();
    }
}
