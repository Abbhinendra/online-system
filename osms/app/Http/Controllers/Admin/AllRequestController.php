<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as UserRequest;
use App\Models\User;
use App\Models\Technicine;
use App\Jobs\SendEmailToWorker;
class AllRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userRequests=UserRequest::orderBy('id','desc')->paginate(6);
        return view('admin.allrequests.index', compact('userRequests'));
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
        //
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
        $userRequest=UserRequest::find($id);
        $user=User::find($userRequest->user_id);
        $workers=Technicine::all();
        return view('admin.allrequests.edit', compact('userRequest','user','workers'));
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
        $userRequest=UserRequest::find($id);
        $request->validate([
        'worker'=>'required|integer',
        ]);
        $userRequest->update(['technicine_id'=>$request->input('worker')]);
        $technicine=Technicine::find($request->input('worker'));
        SendEmailToWorker::dispatch($technicine,$userRequest);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
