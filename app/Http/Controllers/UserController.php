<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\trip;
use App\schedules;
use App\tripround;
define('OMISE_PUBLIC_KEY', 'pkey_test_58x5lew98sd34rjio0a');
define('OMISE_SECRET_KEY', 'skey_test_58x5lew9hbhyqdjgf7j');
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
    function checkout(){
        
        $charge = \OmiseCharge::create(array(
            'amount' => 320000,
            'currency' => 'thb',
            'card' => $_POST['omiseToken']
          
          ));

          echo '<pre>';
          print_r($_POST);
          echo '</pre>';
          
          echo '<hr>';
          
          echo '<pre>';
          print_r($charge);
          echo '</pre>';
         
           

     }
    

    
    








}
