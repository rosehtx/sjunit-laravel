<?php
/**
 * Created by PhpStorm.
 * User: xin Du
 * Date: 2019/7/28
 * Time: 17:47
 */
namespace Rose\Rosejunit\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

//这是一个单元测试的服务提供者
//用来加载Junit组件
class JunitServiceProvider extends ServiceProvider{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
//        echo '这是一个服务组件的测试~~~~~';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->registerRoutes();

        $this->loadViewsFrom(
            __DIR__.'/../../resources/views', 'junit'
        );
    }

    private function routeConfiguration()
    {
        return [
            'namespace'  => 'Rose\Rosejunit\Http\Controllers',
            'prefix'     => 'junit',
            'middleware' => 'web',
        ];
    }
    private function registerRoutes()
    {
        Route::group($this->routeConfiguration(), function () {
            $this->loadRoutesFrom(__DIR__.'/../Http/routes.php');
        });
    }
}