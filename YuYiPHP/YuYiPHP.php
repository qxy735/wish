<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

// 判断 PHP 版本是否满足框架需求
version_compare(PHP_VERSION, '5.5.0', '>=') or exit('Your PHP Version Is Too Low,The PHP Version Need Than 5.5.0 High !');

// 定义框架开始执行时间
define('YUYI_START_TIME', microtime(true));

// 设置编码
header('Content-Type:text/html;charset=utf-8');

// 报告所有错误
error_reporting(-1);

// 不显示错误
ini_set('display_errors', false);

// 加载自动加载处理文件
require __DIR__ . '/bootstrap/autoload.php';

// 加载框架启动开始处理文件
$app = require __DIR__ . '/bootstrap/start.php';

// 运行框架程序
$app->run();