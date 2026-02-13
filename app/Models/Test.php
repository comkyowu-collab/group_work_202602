<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    // これを書き足すことで、Laravelの「複数形ルール」を上書きします
    protected $table = 'test';
}
