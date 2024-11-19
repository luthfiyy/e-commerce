<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function index(){
        $brands = Brand::all();
        $categories = Category::all();
        $products = Product::select('stock_status')->distinct()->get();
        return view("admin.product", compact("categories", "products","brands"));
    }

    public function store(Request $request){
    $products = Product::create($request->all());

    $validator = Validator::make($request->all(), [
        'name' => 'required', 
        'slug' => 'required',
        'short_description' => 'required',
        'description' => 'required',
        'regular_price' => 'required',
        'stock_status' => 'required',
        'quantity' => 'required',
        'image' => 'required',
    ]);

    if ($validator->fails()) {
        return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
    }

    return redirect()->route('admin.index')->with('message', 'Product berhasil ditambah');

    }

    public function edit($id)
    {
        $products = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        return view ('admin.edit-product', compact('products', 'brands', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $products->update($request->all());
        return redirect('/admin')->with('message','Data berhasil di update');
    }

    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();
        return redirect()->back()->with('message', 'Products Delete Successfully');
    }
}
