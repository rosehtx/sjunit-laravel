#roseinory/junit-laravel

#对于框架的要求

Laravel>=5.1 & PHP > 7.1.3

#安装的方式
composer require 'rose/rosejunit'

#配置方式
手动配置laravel对于sjunit的服务到config/app.php中
路径 Rose\Rosejunit\Providers\JunitServiceProvider::class

#解释路由
Route::get('/', 'JunitController@index');
Route::post('/', 'JunitController@store')->name('sjunit.store');
