<?php

namespace LaravelJpCon\q005;

/**
 * Created by PhpStorm.
 * User: tetsunosuke
 */
class NumFormat
{
    /**
     * @param string $str
     * @return string
     */
    public function format(string $str): string
    {
        // number_format ( float $number [, int $decimals = 0 ] ) : string
        // この変換はやや想定外の挙動をするので、テストしておきたい
        $f = floatval($str);
        return number_format($f);
    }
}