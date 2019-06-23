<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Transaction;
use App\Paytype;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction    = Transaction::orderBy('id', 'desc')->get();
        $category       = Paytype::all();
        $summery    = Transaction::select('category')
                                ->SelectRaw('count(*) as quantity')
                                ->SelectRaw('sum(single_amount) as total')
                                ->groupBy('category')
                                ->get();
        return view('transaction.all-history')->with('transaction', $transaction)->with('category', $category)->with('summery', $summery);        
    }

    public function searchTransaction(Request $request){

        $fromDate       = $request->get('from');
        $toDate         = $request->get('to');
        $transactionId  = $request->get('tid');
        $cat            = $request->get('cate');

        $validation = validator::make($request->all(), array(
            'from'  =>  'required',
            'to'    =>  'required',
            'tid'   =>  'required'
        ));

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }
        else
        {
            $category       = Paytype::all();
            $transaction    = Transaction::query()
                                ->whereBetween('trans_date', [$fromDate, $toDate])
                                ->where('transaction_id', 'LIKE', "%{$transactionId}%")
                                ->where('category', 'LIKE', "%{$cat}%")
                                ->get();
            $summery        = Transaction::select('category')
                                ->SelectRaw('count(*) as quantity')
                                ->SelectRaw('sum(single_amount) as total')
                                ->groupBy('category')
                                ->get();
        //dd($transaction);exit();
        return view('transaction.all-history')->with('transaction', $transaction)->with('summery', $summery)->with('category', $category);
        }
    }
}
