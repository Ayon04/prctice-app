<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Services\StudentService;


class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    public $timestamps = false;


    protected $fillable = ['username','full_name','mobile_no','email','password','image'];

}
