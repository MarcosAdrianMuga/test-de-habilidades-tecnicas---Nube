<?php

namespace App\Http\Controllers;

use App\Models\Manga;
use Illuminate\Http\Request;

class MangaController extends Controller
{
    // Method to list all mangas
    public function index()
    {
        $mangas = Manga::with(['category', 'subcategory'])->get();
        return response()->json($mangas);
    }
}