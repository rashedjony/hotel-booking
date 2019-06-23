<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Member;
use Illuminate\Support\Facades\Input;
use App\DB;

class MemberController extends Controller
{
    public function index()
    {
        return response()->json([
            'success' => true,
            'message' => '',
            'data'    => Member::paginate(5),
        ], 200);
             
    }
  

    public function show($id)
    {
        $member = Member::find($id);
        $info = array(
            'status' => 'success',
            'member' => $member
        );
        return response()->json($info, 200); 
    }

    public function searchMember(Request $request)
    { 
        $data = $request->get('phone');
      
            $member_info = Member::where('phone_number', 'like', '%'.$data.'%')
            ->get();             

        return Response()->json([
            'status' => 'sucess',
            'member' => $member_info
        ], 200);
    }

    

    public function store(Request $request)
    {    
        if (Member::where('phone_number', '=', Input::get('phone_number'))->exists()) {           
            $member  = Member::select()
                        ->where('phone_number', '=', $phone)
                        ->get();

            return response()->json([
                'status' => 'User Exist',
                'Number' => $member
            ], 201);
         }
         else{            
            $proImg 	= $request->file('image');
			$proUpload 	= 'uploads/images';
			$filename 	= $proImg->getClientOriginalName();
            $success 	= $proImg->move($proUpload, $filename);
            if($success){
                $member = Member::create([
                    'name'          => $request->input("name"),
                    'member_id'     => $request->input("member_id"),
                    'service_id'    => $request->input("service_id"),
                    'batch_id'      => $request->input("batch_id"),
                    'phone_number'  => $request->input("phone_number"),
                    'office_name'   => $request->input("office_name"),
                    'designation'   => $request->input("designation"),
                    'email'         => $request->input("email"),
                    'image'         => $filename,
                    'remember_token' => $request->input("remember_token"),
                ]);
                $savedata = array(
                'status' => 'success',
                'member' => $member
                );
                return response()->json($savedata, 201);
            }            
         }
    }

    public function update(Request $request, $id)
    { 
        $proImg 	= $request->file('image');
        $proUpload 	= 'uploads/images';
        $filename 	= $proImg->getClientOriginalName();
        $success 	= $proImg->move($proUpload, $filename);

        if($success){
        $member = Member::find($id);
        $member->name 	        = $request->input('name');
        $member->member_id 	    = $request->input('member_id');
        $member->service_id 	= $request->input('service_id');
        $member->batch_id 	    = $request->input('batch_id');
        $member->phone_number 	= $request->input('phone_number');
        $member->office_name 	= $request->input('office_name');
        $member->designation 	= $request->input('designation');
        $member->email 	        = $request->input('email');
        if ($request->hasFile('photo')) {
            //
        }
        $member->image 	= $filename;
        $member->remember_token 	= $request->input('remember_token');
        
        $member->update();
        $updateRecord = Member::select()
                        ->where('id', '=', $id)
                        ->first();
        $update = array(
            'status' => 'success',
            'member' => $updateRecord
        );
            return response()->json($update, 200);
        }
    }

    public function delete(Request $request, $id)
    {
        $member = Member::findOrFail($id);
        $member->delete();
        $delete = array(
            'status' => 'success',
            'member' => $delete
        );
        return response()->json(null, 204);
    }
}
