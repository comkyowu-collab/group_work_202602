<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
        public function titleview($id)
    {
        $comic = \App\Models\Comic::findOrFail($id);
        return view('title_view',compact('comic'));
    }
}
