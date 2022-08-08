<?php

namespace App\Http\Controllers;

use App\Models\Our;
use App\Models\Select;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $selects = Select::all();
        return view ('admin.tan.index')->with('selects', $selects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $select = new Select();
        $select ['name']=$request['name'];
        $select->save();
        return redirect()->route('admin.select.index');
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
        $selects = Select::find($id);
        return view ('admin.tan.edit')->with('selects', $selects);
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
        $select = Select::find($id);
        $select ['name']=$request['name'];
        $select->save();
        return redirect()->route('admin.select.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Select::destroy($id);
        return redirect()->route('admin.select.index')->with('flash_message', 'User Deleted!');
    }
}
