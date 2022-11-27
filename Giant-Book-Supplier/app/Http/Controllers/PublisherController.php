<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index(){
        $publisher_books = Publisher::all();
        return view('publisher', ['publishers' => $publisher_books]);
    }
}
