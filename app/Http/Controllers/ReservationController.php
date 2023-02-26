<?php

namespace App\Http\Controllers;

use App\Models\Resevation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //

    public function store(Request $request){
        // dd(true);
        $request->validate([
            'name'=> 'required' ,
            'email'=> 'required' ,
            'phone'=> 'required' ,
            'date'=> 'required' ,
            'time'=> 'required' ,
            'number_of_persons'=> 'required' ,
        ]);

        $res = Resevation::create([
                        'full name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'date'=> $request->date ,
            'time'=> $request->time ,
            'number_of_persons'=> $request->number_of_persons ,
            'message'=> $request->message ,
            'origin'=> $request->origin ,
        ]);
        if($res)
        \session()->flash('success','vote reservation a été vien enregistré');

        return back();
    }
}