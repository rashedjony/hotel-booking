<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Transaction;

class MemberController extends Controller
{
    public function index()
    {
        $memberList = Member::all();
        return view('member.memberlist')->with('memberList', $memberList);
    }

    public function memberDetails($id)
    {      
        $member     = Member::find($id);
        $history    = Transaction::where('mid', '=', $id)
                                ->get();
        $summery    = Transaction::select('category')
                                ->SelectRaw('count(*) as quantity')
                                ->SelectRaw('sum(total_paid) as total')
                                ->where('mid', '=', $id)            
                                ->groupBy('category')
                                ->get();
        $totalPay   = Transaction::where('mid', '=', $id) 
                                ->get();

        return view('member.details')->with('member', $member)->with('history', $history)->with('summery', $summery)->with('totalPay', $totalPay);
    }
}
