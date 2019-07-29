<?php
/**
 * Created by PhpStorm.
 * User: xin Du
 * Date: 2019/7/28
 * Time: 17:30
 */
namespace Rose\Rosejunit\Http\Controllers;

use Illuminate\Routing\Controller;

class TestController extends Controller{
    public function test(){
        echo '这是一个controller的test';
    }
}