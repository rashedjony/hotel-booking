<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use Hash;
use Session;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::first();
        return view('settings.settings')->with('user', $user);
    }

    public function changePassword($id)
    {
        $userId     = Auth::id();
        return view('settings.change-password')->with('userId', $userId);
    }

    public function updatePassword(Request $request, $id)
    {
        $validation = validator::make($request->all(), array(
            'password'  => 'required|min:6',
            'confirm'   => 'required | same:password'
        ));

        if($validation->fails())
        {
            return redirect()->back()->withErrors($validation);
        }
        else
        {
            $password = User::find($id);
            $password->password = Hash::make($request['password']);
            $password->save();
            
            return redirect()->back()->with('update', 'password has been changed successfully!');
        }
    }
}
