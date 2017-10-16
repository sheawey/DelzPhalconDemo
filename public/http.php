<?php

/**
 * 网页类入口
 */

use Delz\Phalcon\Kernel\HttpKernel as BaseHttpKernel;

/**
 * 利用composer的自动加载
 *
 * @var \Composer\Autoload\ClassLoader $loader
 */
$loader = require __DIR__ . "/../vendor/autoload.php";

/**
 * 应用内核类
 *
 * Class AppKernel
 */
class HttpKernel extends BaseHttpKernel
{

}

$kernel = new HttpKernel('prod', false);

$kernel->handle()->send();