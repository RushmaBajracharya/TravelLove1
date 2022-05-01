<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Illampackage;

class IllampackageController extends Controller
{
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
        $packages=Illampackage::all();
        return view('details.illam',compact('packages'));
    }
    public function createview(Request $request)
    {
        $destination=$request->illam;
        return view('enquiry.illampackageenquiry',compact('destination'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package=Illampackage::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'departure_day'=>$request->departure_day,

        ]);
        $package=Illampackage::all();
        return view('enquiry.illampackageenquiry',compact('package'));
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
