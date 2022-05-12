<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Twowayoutboundticket;


class TwowayoutboundController extends Controller
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
        $packages=Twowayoutboundticket::all();
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
        $ticket = new Twowayoutboundticket;
        $ticket->going_from = $request->going_from;
        $ticket->going_to = $request->going_to;
        $ticket->departure_day = $request->departure_day;
        $ticket->returning_day = $request->returning_day;
        $ticket->save();

        $id=$ticket->id;
        return view('outboundtwoway',compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $twowayoutbound = Twowayoutboundticket::all();
 
        return view('/adminside/tickets/twowayoutbound', compact('twowayoutbound'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Twowayoutboundticket $twowayoutbound)
    {
        $twowayoutbound->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'going_from'=>$request->goingfrom,'going_to'=>$request->goingto,'phone'=>$request->phone,'departure_day'=>$request->departure,
        'returning_day'=>$request->return,
        'passport_number'=>$request->passnum,'passport_validity'=>$request->passval,'status'=>$request->status]);
        return $this->show();
    }
    public function updateadmin(Twowayoutboundticket $twowayoutbound)
    {
        $twowayoutbounds=Twowayoutboundticket::all();
        return view('/adminside/tickets/edit/twowayoutboundedit',compact('twowayoutbound','twowayoutbounds'));
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

        Twowayoutboundticket::
              where('id',$id )
              ->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'phone'=>$request->phone,'no_of_tickets'=>$request->no_of_tickets]);

              $package=Twowayoutboundticket::all();
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
        return view('/adminside/tickets/add/twowayoutboundadd');
    }
    public function storeadmin(Request $request)
    {
        $ticket=Twowayoutboundticket::create([
            'lastname'=>$request->lastname,
            'firstname'=>$request->firstname,
            'going_from'=>$request->going_from,
            'going_to'=>$request->going_to,
            'departure_day'=>$request->departure_day,
            'returning_day'=>$request->returning_day,
            'phone'=>$request->phone,
            'passport_number'=>$request->passnum,
            'passport_validity'=>$request->passval,
        ]);
        return $this->show();
    }

    public function delete(Request $request,Twowayoutboundticket $twowayoutbound)
    {
        $twowayoutbound->delete('DELETE FROM twowayoutboundtickets WHERE id = ?', [$request->id]);
       return $this->show();

    }
}
