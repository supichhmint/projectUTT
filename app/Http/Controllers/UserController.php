<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\trip;
use App\schedules;
use App\tripround;
class UserController extends Controller
{
    
    function index() {
        return view('index');
    }

    function search(){
         $trips = DB::table('trips')->get();
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

    
    function login(){
        return view('login');
    }

    
    function register(){
        return view('register');
    }

    
    








}
