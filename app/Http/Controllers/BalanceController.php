<?php

namespace App\Http\Controllers;

use App\Models\CreditBalance;
use Illuminate\Http\Request;

class BalanceController extends Controller
{
    public function index() {
        $balance = array_sum(CreditBalance::where('users_id', auth()->id())->get()->pluck('amount')->toArray());
        return view('web.balance.index', compact('balance'));
    }
}
