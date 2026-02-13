<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function titleview($id)
    {    
        $comic = \App\Models\Test::findOrFail($id);
        return view('title_view',compact('comic'));
    }
}
