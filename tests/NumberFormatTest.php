<?php

/**
 * @filename NumberFormatTest.php
 * @encoding UTF-8
 * @author sky
 * @link bmqmingqi@qq.com
 * @license http://www.gnu.org/licenses/
 * @datetime 2020-4-13  16:14:16
 * @version 3.0
 * @ * Description of NumberFormatTest
  */

/**
 * 数字格式化测试类
 * @author XinLiang
 */

require '../vendor/autoload.php';
use numberFormat\NumberFormat;

$number = '102400010';
echo NumberFormat::byte_format($number);

//输出：97.7 MB