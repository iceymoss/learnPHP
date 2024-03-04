<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redis;
class UserController extends Controller
{
    /**
     * 显示给定用户的配置文件
     */
    public function show()
    {
        echo "join";
        Redis::set('name', 'Taylor');
        return Redis::get('name');
    }
}
