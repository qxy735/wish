<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

// 加载 composer 自动加载处理文件
require __DIR__ . '/../../vendor/autoload.php';

// 加载合并处理后的所需类文件
file_exists($compile = __DIR__ . '/compile.php') and require $compile;

// 注册禹译框架文件自动加载处理机制
System\Support\ClassLoader::register();