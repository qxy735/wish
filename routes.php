<?php
/**
 * YuYi WorkRoom
 *
 * @version 1.1.0
 * @author  QIXIEYU
 */

Route::get('/', 'IndexController@index');

Route::post('index/wish', 'IndexController@wish');