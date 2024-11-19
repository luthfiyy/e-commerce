<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        // dd($transaction);
        return view('admin.transaction', compact('transactions'));
    }

    public function edit($id)
    {
        $transactions = Transaction::find($id);
        return view ('admin.edit-trans', compact('transactions'));
    }

    public function update(Request $request, $id)
    {
        $transactions = Transaction::find($id);
        $transactions->update(['status_transaction' => $request->input('status_transaction')]);
        // dd($request->input('status_transaction'));
        return redirect('transaction')->with('message','Data berhasil di update');
    }
}
