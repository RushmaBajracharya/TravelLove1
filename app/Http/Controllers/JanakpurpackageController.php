<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Janakpurpackage;

class JanakpurpackageController extends Controller
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
        $packages=Janakpurpackage::all();
        return view('details.janakpur',compact('packages'));
    }
    public function createview(Request $request)
    {
        $destination=$request->janakpur;
        return view('enquiry.janakpurpackageenquiry',compact('destination'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package=Janakpurpackage::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'departure_day'=>$request->departure_day,

        ]);
        $package=Janakpurpackage::all();
        return view('enquiry.janakpurpackageenquiry',compact('package'));
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
