<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

// 定义调试模式
defined('APP_DEBUG') or define('APP_DEBUG', false);

// 定义项目根目录
defined('BASE_PATH') or define('BASE_PATH', dirname(dirname(__DIR__)));

// 定义项目名称,默认为 app
defined('APP_NAME') or define('APP_NAME', 'app');

// 定义项目路径
defined('APP_PATH') or define('APP_PATH', BASE_PATH . DIRECTORY_SEPARATOR . APP_NAME);

// 本地环境
defined('APP_ENV_LOCAL') or define('APP_ENV_LOCAL', 'local');

// 测试环境
defined('APP_ENV_TEST') or define('APP_ENV_TEST', 'test');

// 预发布环境
defined('APP_ENV_PRE_RELEASE') or define('APP_ENV_PRE_RELEASE', 'pre-release');

// 压力测试环境
defined('APP_ENV_PRESURE_TEST') or define('APP_ENV_PRESURE_TEST', 'presure-test');

// 线上环境
defined('APP_ENV_PRODUCTION') or define('APP_ENV_PRODUCTION', 'production');

// 定义 URL 普通模式
defined('URL_MODE_NORMAL') or define('URL_MODE_NORMAL', 'normal');

// 定义 URL PATHINFO 模式
defined('URL_MODE_PATHINFO') or define('URL_MODE_PATHINFO', 'pathinfo');

// 定义 URL 兼容模式
defined('URL_MODE_COMP') or define('URL_MODE_COMP', 'comp');