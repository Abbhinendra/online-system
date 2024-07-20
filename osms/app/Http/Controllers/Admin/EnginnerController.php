<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Technicine;
use App\Http\Requests\StoreTechnicianRequest;
class EnginnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $workers=Technicine::orderBy('id','desc')->get();
        return view('admin.enginner.index', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.enginner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTechnicianRequest $request)
    {
        $worker=Technicine::create($request->all());
        return redirect()->route('enginner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $worker=Technicine::findOrFail($id);
        if($worker){
            return view('admin.enginner.show', compact('worker'));
        }
        else{
         //logic When record not found;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $worker=Technicine::findOrFail($id);
        if($worker){
           return view('admin.enginner.edit', compact('worker'));
        }
        else{
         //logic When record not found;
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTechnicianRequest $request, $id)
    {
        $worker=Technicine::findOrFail($id);
        if($worker){
           $worker->update($request->all());
           return redirect()->route('enginner.index');
        }
        else{
         //logic When record not found;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worker=Technicine::findOrFail($id);
        if($worker){
            $worker->delete();
            return redirect()->back();
        }
        else{
            //login to if delection failed;
        }
    }
}
