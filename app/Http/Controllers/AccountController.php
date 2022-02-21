<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    function index() {
        return view('dashboard.accounts',['page'=>'Accounts','accounts'=>Account::all()]);
    }
}
