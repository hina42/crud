<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index()
    { $data = product::all();
       return response()->json($data);
    }
}
