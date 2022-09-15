<?php

namespace App\Http\Controllers;

use App\Models\Javob;
use Illuminate\Http\Request;

class JavobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $javobs = Javob::all();
        return view('admin.javob.index')->with('javobs',$javobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.javob.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $javob = new Javob();
        $javob['javob']=$request['javob'];
        $javob->save();
        return redirect()->route('admin.javob.index');

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
        $javobs = Javob::find($id);
        return view('admin.javob.edit')->with('javobs',$javobs);
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
        $javob =Javob::find($id);
        $javob['javob']=$request['javob'];
        $javob->save();
        return redirect()->route('admin.javob.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Javob::destroy($id);
        return redirect()->route('admin.javob.index')->with('flash_message','User Deleted');
    }
}
