<?php

namespace fize\crypt;

use Exception;

/**
 * Base64编码解码类
 * @package fize\crypt
 */
class Base64
{
    /**
     * @param string $data 待解码字符串
     * @param bool $strict 是否忽略无法识别的字符
     * @return string 返回string
     * @throws Exception
     */
    public static function decode($data, $strict = false)
    {
        $result = base64_decode($data, $strict);
        if(false === $result){
            throw new Exception('error on Base64::decode');
        }

        return $result;
    }

    /**
     * Base64编码
     * @param string $data 待编码字符串
     * @return string
     * @throws Exception
     */
    public static function encode($data)
    {
        $result = base64_encode($data);
        if(false === $result){
            throw new Exception('error on Base64::encode');
        }

        return $result;
    }
}