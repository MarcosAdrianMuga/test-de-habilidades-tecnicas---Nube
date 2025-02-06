<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    // Method to list all subcategories
    public function index()
    {
        $subcategories = Subcategory::with('category')->get();
        return response()->json($subcategories);
    }
}