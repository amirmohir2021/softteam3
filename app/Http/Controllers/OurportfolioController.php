<?php

namespace App\Http\Controllers;

use App\Models\Our;
use Illuminate\Http\Request;

class OurportfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ours = Our::all();
        return view ('admin.ourportfolio.index')->with('ours', $ours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ourportfolio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request);
        $file = time().'.jpg';
        $request->file->move('image/',$file);
        $our = new Our();
        $our['title'] = $request['title'];
        $our['filename'] = $file;
        $our->save();
        return redirect()->route('admin.ourportfolio.index');
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
        $ours = Our::find($id);
        return view ('admin.ourportfolio.edit')->with('ours', $ours);
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
        $our = Our::find($id);
        $our['title'] = $request['title'];
        $our['filename'] = $request['filename'];
        $our->save();
        return redirect()->route('admin.ourportfolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Our::destroy($id);
        return redirect()->route('admin.ourportfolio.index')->with('flash_message', 'User Deleted!');
    }
}
