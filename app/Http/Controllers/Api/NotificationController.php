<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Notification;

class NotificationController extends Controller
{
    public function index()
    {
        //$notification = Notification::all()->orderBy();
        $notification = Notification::orderBy('created_at', 'desc')->get();
        return response()->json([
            'status' => 'success',
            'message'     => $notification
        ], 200);
     }
}
