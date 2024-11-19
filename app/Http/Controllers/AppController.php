<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppController extends Controller
{
    // public function index(){

    //     $products = Product::orderBy('created_at','DESC')->paginate(12);
    //     return view("dashboard", ['products' => $products]);
    // }
    
    public function index()
    {
            if (Auth::check()) {
                // Jika pengguna sudah login
                if (Auth::user()->utype === 'ADM') {
                    $products = Product::orderBy('created_at','DESC')->paginate(12);
                    return view('admin.index', compact('products'));
                } else {
                    $products = Product::orderBy('created_at','DESC')->paginate(12);
                    return view('userdb', compact('products')); 
                }
            } else {
                // Jika pengguna belum login, tampilkan halaman utama
                $products = Product::orderBy('created_at','DESC')->paginate(12);
                return view('dashboard', compact('products'));
        }
    }
    
    
    // public function index()
    // {
    //         if (Auth::check()) {
    //             $utype = Auth::user()->utype;

    //             if ($utype === 'ADM') {
    //                 $products = Product::orderBy('created_at', 'DESC')->paginate(12);
    //                 return view("admin.index", ['products' => $products]);
    //             } else {
    //                 $products = Product::orderBy('created_at','DESC')->paginate(12);
    //                 return view("userdb", ['products' => $products]);
    //                 // return view('userdb');
    //             }
    //         } else {
    //             // Pengguna belum login, lakukan sesuatu sesuai kebutuhan Anda
    //             return redirect()->route('login');
    //         }
    //     }

}
