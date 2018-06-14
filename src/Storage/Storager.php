<?php
namespace Hinet\Sms\Storage;
/**
 * 存储接口.
 * User: hinet
 * Date: 2016/11/2
 * Time: 9:29
 */
interface Storager
{
    public function set($key, $value);
    public function get($key, $default);
    public function forget($key);
}