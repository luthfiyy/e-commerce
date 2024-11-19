<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::orderBy('created_at','DESC')->paginate(12);
        return view ('admin.brand', ['brands'=>$brands]);
    }

    public function store(Request $request){
        $brands = Brand::create($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required', // Sesuaikan aturan validasi sesuai kebutuhan
            'slug' => 'required',
        ]);
    
        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        return redirect()->back()->with('message', 'brand berhasil ditambah');
    
        }

    public function edit_brand($id)
    {
        $brands = Brand::find($id);
        return view('admin.edit-brand', compact('brands'));
    }    

    public function update_brand(Request $request, $id)
    {
        $brands = Brand::find($id);
        $brands->update($request->all());
        return redirect('/brand')->with('message', 'Brands Updated Successfully');
    }


    public function delete_brand($id)
    {
        $brands = Brand::find($id);
        $brands->delete();
        return redirect()->back()->with('message', 'Brands Delete Successfully');
    }
}
