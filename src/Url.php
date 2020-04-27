<?php

namespace fize\crypt;

/**
 * URL 编码解码
 */
class Url
{

    /**
     * 解析 URL，返回其组成部分
     * @param string $url       要解析的 URL。无效字符将使用 _ 来替换。
     * @param int    $component 指定返回的部分
     * @return array|string|int
     */
    public static function parse($url, $component = -1)
    {
        return parse_url($url, $component);
    }

    /**
     * 对已编码的 URL 字符串进行解码
     * @param string $str 要解码的 URL 字符串
     * @return string
     */
    public static function rawDecode($str)
    {
        return rawurldecode($str);
    }

    /**
     * 按照 RFC 3986 对 URL 进行编码
     * @param string $str 要编码的 URL
     * @return string
     */
    public static function rawEncode($str)
    {
        return rawurlencode($str);
    }

    /**
     * 解码已编码的 URL 字符串
     * @param string $str 要解码的 URL 字符串
     * @return string
     */
    public static function decode($str)
    {
        return urldecode($str);
    }

    /**
     * 编码 URL 字符串
     * @param string $str 要编码的 URL
     * @return string
     */
    public static function encode($str)
    {
        return urlencode($str);
    }
}
