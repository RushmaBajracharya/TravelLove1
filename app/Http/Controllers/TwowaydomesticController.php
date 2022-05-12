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
    public function show()
    {
        $twowaydomestic = Twowaydomesticticket::all();
 
        return view('/adminside/tickets/twowaydomestic', compact('twowaydomestic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Twowaydomesticticket $twowaydomestic)
    {
        $twowaydomestic->update(['lastname' => $request->lastname,'firstname'=>$request->firstname,'going_from'=>$request->goingfrom,'going_to'=>$request->goingto,'phone'=>$request->phone,'departure_day'=>$request->departure,
        'returning_day'=>$request->return,
        'passport_number'=>$request->passnum,'passport_validity'=>$request->passval,'status'=>$request->status]);
        return $this->show();
    }
    public function updateadmin(Twowaydomesticticket $twowaydomestic)
    {
        $twowaydomestics=Twowaydomesticticket::all();
        return view('/adminside/tickets/edit/twowaydomesticedit',compact('twowaydomestic','twowaydomestics'));
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
    public function new(Request $request)
    {
        return view('/adminside/tickets/add/twowaydomesticadd');
    }
    public function storeadmin(Request $request)
    {
        $ticket=Twowaydomesticticket::create([
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

    public function delete(Request $request,Twowaydomesticticket $twowaydomestic)
    {
        $twowaydomestic->delete('DELETE FROM twowaydomestictickets WHERE id = ?', [$request->id]);
       return $this->show();

    }

}

