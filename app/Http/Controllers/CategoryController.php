<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('created_at','DESC')->paginate(12);
        return view ('admin.category', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        $data = new Category;
        $data->name= $request->name;
        $data->slug= $request->slug;

        $validator = Validator::make($request->all(), [
            'name' => 'required', 
            'slug' => 'required',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.editCat', compact('categories'));
    }    

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->update($request->all());
        return redirect('/category')->with('message', 'Category Updated Successfully');
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('message', 'Category Delete Successfully');
    }
}
