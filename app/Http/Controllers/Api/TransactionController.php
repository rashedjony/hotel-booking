<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Auth;
use App\Transaction;
use App\DB;

class TransactionController extends Controller
{
    public function index(Request $request, $id)
    {        
        $history = Transaction::where('mid', '=', $id)
                                ->get();
        return response()->json([
            'status'       => 'success',
            'history'      => $history
        ], 200);
        //return Transaction::all();
        //return view('transaction.all-history')->with('transaction', $transaction);
    }

    // Search or check transaction history by payment category
    public function transactionByCategory(Request $request, $id)
    {        
        $transactionHistory = $request->get('cate');

        $history = Transaction::where('category', 'like', "%{$transactionHistory}%")
                                ->where('mid', '=', $id)
                                ->get();
        return response()->json([
            'status' => 'success',
            'history'      => $history,
        ], 200);
    }

    //total payment by category summery wise view
    public function transactionSummery($id)
    {            
        $summery = Transaction::select('category')
        ->SelectRaw('count(*) as quantity')
        ->SelectRaw('sum(total_paid) as total')
        ->where('mid', '=', $id)            
        ->groupBy('category')
        ->get();
       
        return response()->json([
            'status' => 'success',
            'summery' => $summery
        ], 200);
    }
    
    // public function show($id)
    // {
    //     return Transaction::find($id);
    // }

    public function store(Request $request)
    {
        $transaction = Transaction::create($request->all());
        return response()->json([
            'status' => 'success',
            'transaction' => $transaction
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return response()->json($transaction, 200);
    }

    public function delete(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return response()->json($transaction, 204);
    }
}
