<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

use System\Support\ClassLoader;

// 添加自动加载目录
ClassLoader::addDirectories(array(
    app_path() . '/controllers',
    app_path() . '/models',
    base_path() . '/vendor/yuyiphp/framework/src/System/View',
    base_path() . '/vendor/yuyiphp/framework/src/System/View/plugins',
    base_path() . '/vendor/yuyiphp/framework/src/System/View/sysplugins',
));

// 日志处理
if (Config::get('config.log_write_start')) {
    // 开启日志
    ini_get('log_errors') or ini_set('log_errors', true);

    // 定义日志文件
    $logFile = 'log-' . php_sapi_name() . '_' . date('Y-m-d') . '.txt';

    // 设置日志存放目录
    Log::setPath(storage_path() . '/logs/' . $logFile);
}

// 加载路由过滤文件
require base_path() . '/filters.php';