<?php

namespace App\Http\Controllers;

use App\Models\Resevation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    //
    public function index(){
        $reservations = Resevation::latest('id')->paginate(10);
        // dd($reservations);
        return view('admin.dashboard',compact('reservations'));
    }

    public function show($id){
        $res = Resevation::findOrfail($id);

        return view('admin.reservationDetails',compact('res'));
    }

    public function store(Request $request){
        // dd(true);
        $origin_array = [
            'tk' => 'tiktok',
            'in' => 'instagrame',
            'fb' => 'facebook',
            'yt' => 'youtube',
        ];
        $origin_to_store = 'direct';
        foreach($origin_array as $key => $value){
            if($request->origin == $key){
                $origin_to_store = $value;
                break;
            }
        }
        $request->validate([
            'name'=> 'required' ,
            'email'=> 'required' ,
            'phone'=> 'required' ,
            'date'=> 'required' ,
            'time'=> 'required' ,
            'number_of_persons'=> 'required' ,
        ]);

        $res = Resevation::create([
            'full_name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'date'=> $request->date ,
            'time'=> $request->time ,
            'number_of_persons'=> $request->number_of_persons ,
            'message'=> $request->message ,
            'origin'=> $origin_to_store,
        ]);
        if($res)
        \session()->flash('success','vote reservation a été vien enregistré');

        return back();
    }

    public function reject(Request $request,$id){
        $res = Resevation::findOrfail($id)->update([
            'status' => 'declined'
        ]);
        session()->flash('warning','Rservation a été Rejecté avec succée');
        return back();
    }

    public function confirm(Request $request,$id){
        $res = Resevation::findOrfail($id)->update([
            'status' => 'confirmed'
        ]);
        session()->flash('success','Rservation a été Confirmé avec succée');
        return back();
    }
    public function delete($id){
        $res = Resevation::findOrfail($id)->delete();

        session()->flash('delete','Rservation a été supprimé avec succée');
        return to_route('dashboard');
    }
}