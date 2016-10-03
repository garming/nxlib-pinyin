<?php
/**
 * Created by PhpStorm.
 * User: garming
 * Date: 03/10/2016
 * Time: 21:38
 */
$file = '../vendor/autoload.php';
if(!file_exists($file)){
    die('please run "composer install" first');
}
include_once $file;

$pingyin = \NxLib\PinYin\PinYin::stringToPinyin("中国-Chinese");
print_r($pingyin);