<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Brand;
use App\Models\User;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ShopController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('created_at','DESC')->paginate(12);

        return view("shop", ['products'=>$products]);
    }

    public function product_details($id)
    {
        $brands = Brand::find($id);
        $products = Product::find($id);
        return view('users.product-details', compact('products', 'brands'));
    }

    public function add_cart(Request $request, $id)
    {
        if (Auth::id())
        {
            $user = Auth::user();
            $products = Product::find($id);

            $request->validate([
                'quantity' => 'required|integer|min:1',
            ]);

            $cart = new Cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->user_id = $user->id;
            $cart->product_title = $products->name;
            $cart->price = $products->regular_price;
            $cart->image = $products->image;
            $cart->product_id = $products->id;
            $cart->quantity = $request->quantity ?? 1; // Default to 1 if quantity is not provided
            $cart->save();
            return redirect()->back();
        }
        else {
            return redirect('login');
        }
    }


    public function cart()
    {
        // dd(Auth::user());
        $id = Auth::user()->id;
        $carts = Cart::where('user_id', $id)->get();
        $count = DB::table('carts')->where('user_id', $id)->count();
        $sum = DB::table('carts')->where('user_id', $id)->sum('price');

        return view('users.cart', compact('carts', 'count', 'sum'));
    }

    public function remove_cart($id)
    {
        $carts = Cart::find($id);
        $carts->delete();
        return redirect()->back()->with('message', 'Cart Delete Successfully');
    }
    

    public function checkout($id)
    {
        $user = Auth::user();
        $carts = Cart::find($id);
        $count = DB::table('carts')->where('user_id', $id)->count();
        $sum = DB::table('carts')->where('user_id', $id)->sum('price');
        return view('users.checkout', compact('user', 'carts', 'count','sum'));
    }


    public function add_checkout(Request $request, $id)
    {
        $user = Auth::user();
        $carts = Cart::find($id);

        $validator = Validator::make($request->all(), [
            'payment' => 'required', 
            'expedition' => 'required',
        ]);
    
        
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }

        $transactions = new Transaction();
        $transactions->name = $user->name;
        $transactions->email = $user->email;
        $transactions->phone = $request->phone;
        $transactions->address = $request->address;
        $transactions->product_id = $carts->product_id;
        $transactions->user_id = $user->id;
        $transactions->quantity = $carts->quantity;
        $transactions->price = $carts->price * $carts->quantity;
        $transactions->payment = $request->payment;
        $transactions->expedition = $request->expedition;
        $transactions->status_transaction = 'Waiting for confirmation';

        $transactions->save();
    
    
        // Hapus keranjang belanja setelah checkout
        Cart::where('user_id', $user->id)->delete();
    
        // Redirect atau lakukan sesuatu setelah checkout berhasil
        // return redirect()->route('users.order-history')->with('message', 'Checkout success!');
        // return redirect()->route('/order-history/{id}')->with('message', 'Checkout success!');
        return redirect()->route('order.history', $user->id);

    }

    public function order_history($id)
    {
        $user_id = Auth::id();
        $transactions = Transaction::where('user_id', $user_id)->get();
        // dd($transactions);
        return view('users.order-history', compact('transactions'));
    }

}
