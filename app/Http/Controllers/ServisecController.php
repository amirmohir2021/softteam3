<?php

namespace App\Http\Controllers;

use App\Models\Select;
use App\Models\Servisec;
use Illuminate\Http\Request;

class ServisecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servisecs = Servisec::all();
        return view('admin.servis.index')->with('servisecs',$servisecs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=time().'.jpg';
        $request->file->move('photo/',$file);
        $servisec = new Servisec();
        $servisec['title']=$request['title'];
        $servisec['file'] =$file;
        $servisec['body']=$request['body'];
        $servisec->save();
        return redirect()->route('admin.servisec.index');
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
        $servisecs = Servisec::find($id);
        return view('admin.servis.edit')->with('servisecs',$servisecs);
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
        $servisec = Servisec::find($id);
        $servisec['title']=$request['title'];
        $servisec['file'] =$request['file'];
        $servisec['body']=$request['body'];
        $servisec->save();
        return redirect()->route('admin.servisec.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Servisec::destroy($id);
        return redirect()->route('admin.servisec.index')->with('flash_message', 'User Deleted!');
    }
}
