<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Genre;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index', ['products' => Product::all(), 'categories' => Category::all(), 'genres' => Genre::all()]);
    }


    public function book($book){
        
    }
}
