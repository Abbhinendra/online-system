<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use Gate;
use App\Http\Requests\servicesStoreRequest;
class serviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Gate::allows('isAdmin')){
            return view('admin.services.create');
        }
        else{
            abort(403);
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(servicesStoreRequest $request)
    {
        if(Gate::allows('isAdmin')){
           $service=Service::create($request->all());
           if($service){
              if($request->hasFile('image')){
                 $service->addMediaFromRequest('image')->toMediaCollection('images');
              }
           }
           return redirect()->route('services.index');
        }
        else{
            abort(403);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Gate::allows('isAdmin')){
           $service=Service::find($id);
           if($service){
           return view('admin.services.show', compact('service'));
           }
        }
        else{
            abort(403);
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
        if(Gate::allows('isAdmin')){
            $service=Service::find($id);
            if($service){
            return view('admin.services.edit', compact('service'));
            }
        }
        else{
            abort(403);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(servicesStoreRequest $request, $id)
    {
        if(Gate::allows('isAdmin')){
            $service=Service::find($id);
            if($service){
            $service->update($request->all());
            if($request->hasFile('image')){
                $service->clearMediaCollection('images');
                $service->addMediaFromRequest('image')->toMediaCollection('images');
            }
            return redirect()->route('services.index');
            }
        }
        else{
            abort(403);
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
        if(Gate::allows('isAdmin')){
            $service=Service::find($id);
            if($service){
                $service->delete();
            }
            return redirect()->back();
        }
        else{
            abort(403);
        }
    }
}
