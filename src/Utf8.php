<?php


namespace fize\crypt;

/**
 * UTF-8编码解码类
 * @package fize\crypt
 */
class Utf8
{
    /**
     * 用 UTF-8 方式编码的 ISO-8859-1 字符串转换成单字节的 ISO-8859-1 字符串。
     * @param string $data 待转化字符串
     * @return string
     */
    public static function decode($data)
    {
        return utf8_decode($data);
    }

    /**
     * 将 ISO-8859-1 编码的字符串转换为 UTF-8 编码
     * @param string $data 待转化字符串
     * @return string
     */
    public static function encode($data)
    {
        return utf8_encode($data);
    }
}