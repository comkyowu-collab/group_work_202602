<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class ComicController extends Controller
{
        public function titleview($id)
    {
        
        $comic = \App\Models\Test::findOrFail($id);
        return view('title_view',compact('comic'));
    }
=======
use App\Models\Comic;

class ComicController extends Controller
{
    public function search(Request $request)
{
    $query = Comic::query();

    if ($request->genre) {
        $query->where('genre', $request->genre);
    }

    if ($request->publisher) {
        $query->where('publisher', $request->publisher);
    }

    if ($request->status) {
        $query->where('status', $request->status);
    }

    $comics = $query->get();

    return view('list.list', compact('comics'));
}
>>>>>>> origin/f/list-screen
}
