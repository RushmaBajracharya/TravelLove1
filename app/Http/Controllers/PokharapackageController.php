<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokharapackage;

class PokharapackageController extends Controller
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
        $packages=Pokharapackage::all();
        return view('details.pokhara',compact('packages'));
    }
    public function createview(Request $request)
    {
        $destination=$request->pokhara;
        return view('enquiry.pokharapackageenquiry',compact('destination'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $package=Pokharapackage::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'departure_day'=>$request->departure_day,

        ]);
        $package=Pokharapackage::all();
        return view('enquiry.pokharapackageenquiry',compact('package'));
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
