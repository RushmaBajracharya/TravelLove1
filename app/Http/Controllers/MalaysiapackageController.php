<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Malaysiapackage;

class MalaysiapackageController extends Controller
{
   /**
     * Display a listing of the resource.
     *x
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $packages=Malaysiapackage::all();
        return view('details.malaysia',compact('packages'));
    }
    public function createview(Request $request)
    {
        $destination=$request->chitwan;
        return view('enquiry.malaysiapackageenquiry',compact('destination'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package=Malaysiapackage::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'departure_day'=>$request->departure_day,

        ]);
        $package=Malaysiapackage::all();
        return view('enquiry.malaysiapackageenquiry',compact('package'));
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
        //
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
        //
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
