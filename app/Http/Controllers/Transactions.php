<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;

class Transactions extends Controller
{
    function insert(Request $request) {
        $request->validate([
            'dest'=>'required',
            'selectType'=>'required',
            'selectCateg'=>'required',
            'amount'=>'required'
        ]);

        $query = DB::table('transactions')->insert([
            'Destination'=>$request->input('dest'),
            'Type'=>$request->input('selectType'),
            'Category'=>$request->input('selectCateg'),
            'Amount'=>$request->input('amount'),
        ]);

        return redirect('Transactions');
    }

    function show() {
        $data = Transaction::all();
        return view('dashboard.transactions',['data'=>$data, 'page'=>'Transactions']);
    }
}
?>