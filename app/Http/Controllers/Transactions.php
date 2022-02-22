<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Account;

class Transactions extends Controller
{
    function insert(Request $request) {
        $request->validate([
            'dest'=>'required',
            'selectType'=>'required',
            'selectCateg'=>'required',
            'amount'=>'required',
        ]);

        $query = DB::table('transactions')->insert([
            'Destination'=>$request->input('dest'),
            'Type'=>$request->input('selectType'),
            'Category'=>$request->input('selectCateg'),
            'Amount'=>$request->input('amount'),
            'account_id'=>$request->input('accD')
        ]);

        return redirect('Transactions');
    }

    function show(Request $req) {
        // $userid=$req->session()->get('user_id');
        // $accs = Account::where('user_id',$userid)->get()->map(function($acc){
        //     return $acc->only(['id']);
        // })->toArray();
        
        $data = Transaction::all();
        // $data = Transaction::cursor()->filter(function ($transaction){
        //     return in_array($accs,$transaction->account_id) ;
        // });

        return view('dashboard.transactions',['data'=>$data, 'page'=>'Transactions']);
    }

    function index(Request $req) {
        $userid=$req->session()->get('user_id');
        $accs = Account::where('user_id',$userid)->get();
        return view('dashboard.addTransaction',['page'=>'Transaction','accounts'=>$accs]);
    }
}
?>