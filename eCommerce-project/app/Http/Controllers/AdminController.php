<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // return view('admin.index');
        $products = Product::orderBy('created_at','DESC')->paginate(12);
        // $brands = Brand::orderBy('created_at','DESC')->paginate(12);

        return view("admin.index", ['products'=>$products]);
    }

}
