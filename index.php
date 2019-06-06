<?php
/**
 * Created by PhpStorm.
 * User: TFF-PC-PHP
 * Date: 2019/6/5
 * Time: 15:52
 */
require 'vendor/autoload.php';

$log = new Monolog\Logger('test composer');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->addWarning('Foo');