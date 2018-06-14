<?php
/**
 * 实现Cache存储接口.
 * User: hinet
 * Date: 2016/11/2
 * Time: 9:31
 */

namespace Hinet\Sms\Storage;

use Cache;
class CacheStorage implements Storager
{
    protected static $lifetime = 120;
    public static function setMinutesOfLifeTime($time)
    {
        if (is_int($time) && $time > 0) {
            self::$lifetime = $time;
        }
    }
    public function set($key, $value)
    {
        Cache::put($key, $value, self::$lifetime);
    }
    public function get($key, $default)
    {
        return Cache::get($key, $default);
    }
    public function forget($key)
    {
        if (Cache::has($key)) {
            Cache::forget($key);
        }
    }
}