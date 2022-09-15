<?php

namespace App\Http\Controllers;

use App\Models\Our;
use App\Models\Savol;
use App\Models\Select;
use Illuminate\Http\Request;

class SavolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savols = Savol::all();
        return view ('admin.savollar.index')->with('savols', $savols);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.savollar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $savol = new Savol();
        $savol['savol']=$request['savol'];
        $savol->save();
        return redirect()->route('admin.savol.index');
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
        $savols = Savol::find($id);
        return view ('admin.savollar.edit')->with('savols', $savols);
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
        $savol = Savol::find($id);
        $savol['savol']=$request['savol'];
        $savol->save();
        return redirect()->route('admin.savol.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Savol::destroy($id);
        return redirect()->route('admin.savol.index')->with('flash_message', 'User Deleted!');
    }
}
