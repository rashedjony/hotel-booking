<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Paytype;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Paytype::all();
        return view('paytypes')->with('categories', $categories);
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
            'cname' => 'required',
            'status' => 'required'
        ));

        if($validation->fails()){
            return redirect()->withErrors($validation)->withInput();
        }

        $saveCat = new Paytype;

        $saveCat->cname     = $request->input('cname');
        $saveCat->status    =   $request->input('status');

        $saveCat->save();

        return redirect()->back()->with('success', 'Successfully added category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editCat = Paytype::find($id);
        return view('category.edit')->with('editCat', $editCat);
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
        $validation = validator::make($request->all(), array(
            'cname' => 'required',
            'status' => 'required'
        ));

        if($validation->fails()){
            return redirect()->withErrors($validation)->withInput();
        }

        Paytype::find($id)->update($request->all());
        return redirect()->back()->with('update', 'Category Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Paytype::find($id);
        $category->delete();

        Session::flash('delete', 'Category Deleted Succfully!');
        return redirect()->back();
    }
}
