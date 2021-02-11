<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drill extends Model
{
    //モデルがその属性以外を持たなくなる
    protected $fillable = ['title','kategory_neme','problem0','problem1','problem2','problem3','problem4','problem5','problem6','problem7','problem8',
        'problem9'];
}
