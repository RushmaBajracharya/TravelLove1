<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onewaydomesticticket;
use Illuminate\Support\Facades\Redirect;
class OnewaydomesticController extends Controller
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
        $packages=Onewaydomesticticket::all();
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

        $ticket = new Onewaydomesticticket;
    $ticket->going_from = $request->going_from;
    $ticket->going_to = $request->going_to;
    $ticket->departure_day = $request->departure_day;
    $ticket->save();

    $id=$ticket->id;

        return view('domesticoneway',compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $onewaydomestic = Onewaydomesticticket::all();
 
        return view('/adminside/tickets/onewaydomestic', compact('onewaydomestic'));
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

            Onewaydomesticticket::
              where('id',$id )
              ->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'phone'=>$request->phone,'no_of_tickets'=>$request->no_of_tickets]);


            $package=Onewaydomesticticket::all();


              return view('domesticticket',compact('package')) ;
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
