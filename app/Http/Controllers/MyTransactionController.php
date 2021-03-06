<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyTransactionController extends Controller
{
    function viewTransaction(){
        if(Auth::user()->role == "member"){
            $transactions = Transaction::where("memberId","=",Auth::id())->get();
        }
        else{
            $transactions = Transaction::all();
        }
        
        $transactionsId = array_map(function($transaction){
            return $transaction["id"];
        },$transactions->toArray());
        
        $transactionItems = TransactionItem::whereIn("transactionId",$transactionsId)->get();
        
        if(sizeof($transactionsId)>0){
            return view("my-layouts.transaction",["transactions"=>$transactions,"transactionItems"=>$transactionItems]);
        }
        return view("my-layouts.transaction");
    }
}
