<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

return array(
    'timezone' => 'PRC',

    'session_start' => true,

    'url_mode' => URL_MODE_NORMAL,

    'url_module' => 'm',

    'url_action' => 'a',

    'log_write_start' => false,

    'tpl_file_path' => BASE_PATH . '/YuYiPHP/data/tpl',

    'success_tpl_file' => 'success.html',

    'error_tpl_file' => 'error.html',

    'verify_code' => 'code',

    'left_delimiter' => '<{',

    'right_delimiter' => '}>',

    'cache_start' => false,

    'cache_life_time' => 60,

    'open_start_domain' => false,

    'aliases' => array(
        'Config' => 'System\Support\Facades\Config',
        'Log' => 'System\Support\Facades\Log',
        'Route' => 'System\Support\Facades\Route',
        'Controller' => 'System\Routing\Controller',
        'Redirect' => 'System\Support\Facades\Redirect',
        'Model' => 'System\Database\Model',
        'Input' => 'System\Support\Facades\Input',
        'Session' => 'System\Support\Facades\Session',
        'Image' => 'System\Support\Facades\Image',
        'File' => 'System\Filesystem\File',
    )
);