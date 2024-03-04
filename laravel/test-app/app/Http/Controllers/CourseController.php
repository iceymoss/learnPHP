<?php

namespace App\Http\Controllers;


use App\Models\CourseInfo;
class CourseController extends Controller
{
    public function GetCourseList() {
        echo "hello";
        $course = new CourseInfo;
       $c =  $course::all();
        return json_encode($c);
    }
}
