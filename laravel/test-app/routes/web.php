<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//get
Route::get("/hello", function () {
    return "hello, iceymoss!";
});

//post
Route::post("/getUserInfo", function () {
    return "this is a post request";
});

//match
Route::match(["get", "post"], 'match', function () {
    return "this is a match request";
});

//any
Route::any("getAny", function () {
    return "this is a any request";
});

//获取参数， 在path中获取参数
Route::get("user/{id}", function ($id) {
    return "user-". $id;
});

//路由分组
Route::group(["prefix" => "user"], function() {
    Route::get("list", function () {
        return json_encode([["name" => "iceymoss1", "age" => 18, "gender" => 1], "name" => "iceymoss10", "age" => 23, "gender" => 1, "name" => "iceymoss34", "age" => 17, "gender" => 1]);
    });

    Route::get("{id}", function ($id) {
        return $id;
    });
});

//输出视图
Route::get("/welcome", function () {
    return view("welcome");
});

//过期了？
//Route::get("member/info", 'MemberController@Info');

Route::get("member/info", [MemberController::class, 'Info']);

//Route::get("member/info", 'App\Http\Controllers\MemberController@Info');

Route::get("course", [CourseController::class, 'GetCourseList']);

//show
Route::get("user/name", [UserController::class, 'show']);
