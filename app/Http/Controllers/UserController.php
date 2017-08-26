<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\trip;
use App\schedules;
use App\tripround;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    
    function index() {
        return view('index');
    }

    function search(){
         $trips = Trip::paginate(15);
        return view('tripuser',['trips'=>$trips]);
    }
    
    function schedule($id){
  
        $schedules = schedules::where('trip_id',$id)->get();
        $triprounds = tripround::where('trip_id',$id)->get();
        $trip = trip::where('id',$id)->first();
        $data = array(
            'schedules' => $schedules,
            'triprounds' => $triprounds,
            'trip' => $trip,
            'title' => 'Schedules'
        );
        return view('schedule', $data);
    }
    function booking($id){
        $fk = DB::table('triprounds')->select('trip_id')->where('id',$id)->pluck('trip_id');
        $booking =DB::table('booking')->where('tripround_id',$id)->get();
        $count = $booking->count();
        $trip = DB::table('trips')->where('id',$fk)->get();
        $triprounds = tripround::where('id',$id)->first();
<<<<<<< HEAD

=======
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
        $data = array(
            'triprounds' => $triprounds,
            'trip' => $trip,
            'booking' => $booking,
            'count' => $count
        );
        return view('booking', $data);
<<<<<<< HEAD

    }

    
=======
    }
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
    function login(){
        return view('login');
    }

    
    function register(){
        return view('register');
    }

    








}
