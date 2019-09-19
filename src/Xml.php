<?php /** @noinspection PhpComposerExtensionStubsInspection */

namespace fize\crypt;

use SimpleXMLElement;

/**
 * XML编码解码类
 * @package fize\crypt
 */
class Xml
{
    /**
     * XML数据默认配置项
     * @var array
     */
    private static $config = [
        'root_name' => 'root', //根节点名称
        'root_attr' => [], //根节点属性
        'item_name' => 'item', //数字节点转换的名称
        'item_key'  => 'id', //数字节点转换的属性名
    ];

    /**
     * 禁止构造
     */
    private function __construct()
    {
    }

    /**
     * 数据XML编码
     * @param SimpleXMLElement $xml xml对象
     * @param mixed $data 数据
     * @param string $item 数字索引时的节点名称
     * @param string $id 数字索引key转换为的属性名
     */
    private static function data2xml(SimpleXMLElement $xml, $data, $item = 'item', $id = 'id')
    {
        foreach ($data as $key => $value) {
            //指定默认的数字key
            if (is_numeric($key)) {
                $id && $val = $key;
                $key = $item;
            }
            //添加子元素
            if (is_array($value) || is_object($value)) {
                $child = $xml->addChild($key);
                self::data2xml($child, $value, $item, $id);
            } else {
                $child = $xml->addChild($key, $value);
            }
            //记录原来的key
            if (isset($val)) {
                $child->addAttribute($id, $val);
            }
        }
    }

    /**
     * 编码XML数据
     * @param mixed $data 被编码的数据
     * @param array $config 数据配置项
     * @return string 编码后的XML数据
     */
    public static function encode($data, array $config = [])
    {
        //初始化配置
        $config = array_merge(self::$config, $config);
        //创建XML对象
        $xml = new SimpleXMLElement("<{$config['root_name']}></{$config['root_name']}>");
        self::data2xml($xml, $data, $config['item_name'], $config['item_key']);
        return $xml->asXML();
    }

    /**
     * 数据XML解码
     * @param SimpleXMLElement $xml xml对象
     * @param array $data 解码后的数据
     * @param string $item 数字索引时的节点名称
     * @param string $id 数字索引key转换为的属性名
     */
    private static function xml2data(SimpleXMLElement $xml, &$data, $item = 'item', $id = 'id')
    {
        foreach ($xml->children() as $items) {
            $key = $items->getName();
            $attr = $items->attributes();
            if ($key == $item && isset($attr[$id])) {
                $key = strval($attr[$id]);
            }
            $val = [];
            if ($items->count()) {
                self::xml2data($items, $val);
            } else {
                $val = strval($items);
            }
            $data[$key] = $val;
        }
    }

    /**
     * 解码XML数据
     * @param string $str XML字符串
     * @param boolean $assoc 是否转换为数组，默认为true
     * @param array $config 数据配置项
     * @return mixed  解码后的XML数据
     */
    public static function decode($str, $assoc = true, array $config = [])
    {
        //初始化配置
        $config = array_merge(self::$config, $config);
        //创建XML对象
        $xml = new SimpleXMLElement($str);
        if ($assoc) {
            $data = [];
            self::xml2data($xml, $data, $config['item_name'], $config['item_key']);
            return $data;
        }
        return $xml;
    }
}