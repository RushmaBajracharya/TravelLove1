<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twowaydomesticticket;


class TwowaydomesticController extends Controller
{
     /**
     * Display a listing of the resource.
     *
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
    public function create()
    {
        $packages=Twowaydomesticticket::all();
        return view('domesticticket',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Twowaydomesticticket;
        $ticket->going_from = $request->going_from;
        $ticket->going_to = $request->going_to;
        $ticket->departure_day = $request->departure_day;
        $ticket->returning_day = $request->returning_day;
        $ticket->save();

        $id=$ticket->id;
        return view('domestictwoway',compact('id'));
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
    public function update(Request $request,$id)
    {

        Twowaydomesticticket::
              where('id',$id )
              ->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'phone'=>$request->phone,'no_of_tickets'=>$request->no_of_tickets]);

              $package=Twowaydomesticticket::all();
              return view('domesticticket',compact('package'));
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

