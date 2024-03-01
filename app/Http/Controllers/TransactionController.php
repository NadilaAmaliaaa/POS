<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transaksi($transaksi = 0) {
        return view('transaction', ['transaksi' => $transaksi]);
    }
}
