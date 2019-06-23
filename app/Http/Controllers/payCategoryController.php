<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paytype;

class payCategoryController extends Controller
{
    public function index()
    {
        $categories = Paytype::all();
        return view('paytypes')->with('categories', $categories);
    }
}
