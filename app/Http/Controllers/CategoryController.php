<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Method to list all categories
    public function index()
    {
        $categories = Category::with('subcategories')->get();
        return response()->json($categories);
    }
}