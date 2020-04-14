<?php

/**
 * @filename NumberFormat.php
 * @encoding UTF-8
 * @author sky
 * @link bmqmingqi@qq.com
 * @license http://www.gnu.org/licenses/
 * @datetime 2020-4-13  16:07:41
 * @version 3.0
 * @ * Description of NumberFormat
 */

namespace numberFormat;

class NumberFormat {
   /**
     * 格式化字节
     * @param int $num       数字
     * @param int $precision 精准度
     * @return string
     */
    public static function byte_format($num = 0, $precision = 1)
    {
        if ($num >= 1000000000000)
        {
            $num = round($num / 1099511627776, $precision);
            $unit = 'TB';
        }
        elseif ($num >= 1000000000)
        {
            $num = round($num / 1073741824, $precision);
            $unit = 'GB';
        }
        elseif ($num >= 1000000)
        {
            $num = round($num / 1048576, $precision);
            $unit = 'MB';
        }
        elseif ($num >= 1000)
        {
            $num = round($num / 1024, $precision);
            $unit = 'KB';
        }
        else
        {
            return number_format($num).' Bytes';
        }

        return number_format($num, $precision).' '.$unit;
    }
}
