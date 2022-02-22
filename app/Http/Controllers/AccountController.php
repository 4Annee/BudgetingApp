<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    function index(Request $req) {
        $userid=$req->session()->get('user_id');
        $accs = Account::where('user_id',$userid)->get();
        return view('dashboard.accounts',['page'=>'Accounts','accounts'=>$accs]);
    }
    function create(Request $req){
        $userid=$req->session()->get('user_id');
        Account::create(['name'=>$req->accname,'type'=>$req->acctype,'balance'=>$req->accBalance,'user_id'=>$userid]);
        return redirect('/Accounts');
    }
}
