<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
