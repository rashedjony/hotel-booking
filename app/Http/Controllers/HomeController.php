<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Member;
use App\Notification;
use App\Paytype;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $members    = Member::all();
        $totalPaid  = Transaction::all();
        $summery    = Transaction::select('category')
                                ->SelectRaw('count(*) as quantity')
                                ->SelectRaw('sum(total_paid) as total')
                                ->groupBy('category')
                                ->get();
        $month      = Transaction::whereRaw('MONTH(created_at)', date('m'))
                                    ->get(); 
        $year       = Transaction::whereRaw('MONTH(created_at) = ?', date('Y'))
                                    ->get();                                        
        return view('home')->with('members', $members)->with('total', $totalPaid)->with('summery', $summery)->with('month', $month)->with('year', $year);
    }

}
