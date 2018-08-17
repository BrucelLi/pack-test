<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/17/017
 * Time: 18:26
 */
require_once __DIR__ . '/vendor/autoload.php';
use Pack\Test\Service;

$obj = new Service();

$msg = $obj->hello();
var_dump($msg);