<?php
/**
 * Created by PhpStorm.
 * User: xin Du
 * Date: 2019/7/28
 * Time: 17:25
 */
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('sjunit.store');

Route::get('test', 'TestController@test');