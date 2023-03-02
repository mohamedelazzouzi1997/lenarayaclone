<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Resevation;
use Illuminate\Http\Request;
use App\Mail\ReservationEmail;
use Illuminate\Support\Facades\Mail;

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
        $request->validate([
            'name'=> 'required' ,
            'email'=> 'required' ,
            'phone'=> 'required' ,
            'date'=> 'required' ,
            'time'=> 'required' ,
            'number_of_persons'=> 'required' ,
        ]);

        // dd(Carbon::parse($request->date)->format('Y-m-d'));
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


        $res = Resevation::create([
            'full_name'=> $request->name ,
            'email'=> $request->email ,
            'phone'=> $request->phone ,
            'date'=> Carbon::parse($request->date)->format('Y-m-d') ,
            'time'=> $request->time ,
            'number_of_persons'=> $request->number_of_persons ,
            'message'=> $request->message ,
            'origin'=> $origin_to_store,
        ]);
        \session()->flash('success','Merci votre demande de réservation est en attente de confirmation. Les mises à jour seront envoyées à l\'adresse e-mail que vous avez fournie.');
            Mail::to($request->email)->send(new ReservationEmail($res,'reserve'));
        return back();
    }

    public function reject(Request $request,$id){

        $res = Resevation::findOrfail($id);

        $reservation_mail = $res->email;

        $res->update([
            'status' => 'declined'
        ]);

        if($res)
            Mail::to($reservation_mail)->send(new ReservationEmail($res,'reject'));

        session()->flash('warning','Rservation a été Rejecté avec succée');
        return back();
    }

    public function confirm(Request $request,$id){

        $res = Resevation::findOrfail($id);


        $reservation_mail = $res->email;


        $res->update([
            'status' => 'confirmed'
        ]);

        if($res)
            Mail::to($reservation_mail)->send(new ReservationEmail($res,'confirm'));

        session()->flash('success','Rservation a été Confirmé avec succée');
        return back();
    }
    public function delete(Request $request,$id){
        $res = Resevation::findOrfail($id);


        $reservation_mail = $res->email;


        $res->delete();

        if($res)
            Mail::to($reservation_mail)->send(new ReservationEmail($res,'reject'));

        session()->flash('delete','Rservation a été supprimé avec succée');
        return to_route('dashboard');
    }
}