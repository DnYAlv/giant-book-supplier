<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show_categories($id){
        $book_data = Category::find($id);
        return view('category', [
            'category' => $book_data
        ]);
    }
}
