<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Paytype;

class payCategoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'status'        => 'success',
            'category'    =>  Paytype::all()
        ], 200);
    }
}
