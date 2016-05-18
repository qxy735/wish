<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

// 引入定义的常量
require __DIR__ . '/../start/consts.php';

// 实例化应用对象
$application = new System\Foundation\Application();

// 检测环境
$env = $application->detectEnvironment(function ($app) {
    return $app->getEnvironment();
});

// 绑定 path 文件中指定的目录
if (file_exists($paths = __DIR__ . '/path.php')) {
    $application->bindInstallPaths(require $paths);
}

// 获取框架启动文件
$boot = $application->getBootstrapFile();

// 判断框架核心文件是否存在，不存在则中止执行
file_exists($boot) or exit('Framework Lacks Core Startup Files !');

// 加载框架核心启动文件
require $boot;

// 返回应用对象
return $application;