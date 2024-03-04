<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseInfo extends Model
{
    use HasFactory, SoftDeletes; // 使用软删除特性

    protected $table = 'course_infos'; // 明确指定表名
    protected $dates = ['deleted_at']; // 保证软删除时间戳被正确处理

    protected $fillable = [
        'name',
        'course_id',
        'teacher',
        'student_total',
        'time',
        'class_room',
        'class_room_id',
        'week',
        'week_nums',
        'is_bi_week'
    ]; // 定义可批量赋值的字段

}
