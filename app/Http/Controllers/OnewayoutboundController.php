<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Onewayoutboundticket;


class OnewayoutboundController extends Controller
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
        $packages=Onewayoutboundticket::all();
        return view('internationalticket',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ticket = new Onewayoutboundticket;
        $ticket->going_from = $request->going_from;
        $ticket->going_to = $request->going_to;
        $ticket->departure_day = $request->departure_day;
        $ticket->save();

        $id=$ticket->id;
        return view('outboundoneway',compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $onewayoutbound = Onewayoutboundticket::all();
 
        return view('/adminside/tickets/onewayoutbound', compact('onewayoutbound'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Onewayoutboundticket $onewayoutbound)
    {
        $onewayoutbound->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'going_from'=>$request->goingfrom,'going_to'=>$request->goingto,'phone'=>$request->phone,'departure_day'=>$request->departure,'passport_number'=>$request->passnum,'passport_validity'=>$request->passval,'status'=>$request->status]);
        return $this->show();
    }

    public function updateadmin(Onewayoutboundticket $onewayoutbound)
    {
        $onewayoutbounds=Onewayoutboundticket::all();
        return view('/adminside/tickets/edit/onewayoutboundedit',compact('onewayoutbound','onewayoutbounds'));
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

        Onewayoutboundticket::
              where('id',$id )
              ->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'phone'=>$request->phone,'no_of_tickets'=>$request->no_of_tickets]);

              $package=Onewayoutboundticket::all();
              return view('internationalticket',compact('package'));
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
    public function new(Request $request)
    {
        return view('/adminside/tickets/add/onewayoutboundadd');
    }
    public function storeadmin(Request $request)
    {
        $ticket=Onewayoutboundticket::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'going_from'=>$request->going_from,
            'going_to'=>$request->going_to,
            'departure_day'=>$request->departure_day,
            'phone'=>$request->phone,
            'passport_number'=>$request->passnum,
            'passport_validity'=>$request->passval,
        ]);
        return $this->show();


    }
    public function delete(Request $request,Onewayoutboundticket $onewayoutbound)
    {
        $onewayoutbound->delete('DELETE FROM onewayoutboundtickets WHERE id = ?', [$request->id]);
       return $this->show();

    }

}

