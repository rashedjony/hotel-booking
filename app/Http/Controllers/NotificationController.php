<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Notification;
use Session;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notification = Notification::paginate();
        return view('notification.notification_list')->with('notificationsList', $notification);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = validator::make($request->all(), array(
            'title'         => 'required',
            'message'       => 'required',
        ));

        if($validation->fails()){
            return redirect()->back()->withErrors($validation)->withInput();
        }

        $saveData = new Notification;
       
        $saveData->title            =   $request->input('title');
        $saveData->message          =   $request->input('message');
        $saveData->category         =   $request->input('category');
        
        $saveData->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notification = Notification::find($id);
        
        return view('notification.edit')->with('notification', $notification);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'title'     => 'required',
            'message'   => 'required',
        ]);
        Notification::find($id)->update($request->all());
        return redirect()->back()->with('success', 'Notification Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $notification = Notification::find($id);
        $notification->delete();

        // redirect
        Session::flash('delete', 'Successfully deleted the notification!');
        return redirect()->route('notifications.index');
    }
}
