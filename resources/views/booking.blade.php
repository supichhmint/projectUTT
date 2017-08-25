@extends('layouts.agency') 
@section('title', 'booking') 
@section('content')

<div class="welcome about">

    <div class="container" align="center">
        <div class="row">
        @foreach($trip as $trips)
            <div>
                <h2>{{$trips->trips_name}}</h2>
                <h5>{{$trips->trip_nday}}วัน {{$trips->trip_nnight}}คืน</h5>
                <p>จังหวัด{{$trips->trip_province}}</p>
                <p>{{$trips->trip_meal}}มื้อ</p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p></p>
            </div>
            @endforeach
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline">
                   
                   
                    <?php
                    if($count == 0){
                        $sum = $triprounds->amount_seats;
                    }
                    else if($count > 0 ){
                        $amount =  $triprounds->amount_seats;
                        $nbooking  = $bookings[0]->number_booking;
                        $sum = $amount-$nbooking;
                    }   
                    ?>   
                    <form>                           
                                รอบวันที่ {{$triprounds->start_date}} - {{$triprounds->departure_date}}  
                            <br>
                                    จำนวนเด็ก 
                   <input type ="number" name="number_children" id="number_children" min="0" max={{$sum}} onchange="myChildren()" onclick="mySummy()" >
                                    ราคา :: {{$triprounds->price_child}}
                                    ยอดรวมเด็ก<p id="pchild"></p>
                            <br>
                            
                            
                                   จำนวนผู้ใหญ่ 
                                   <input type ="number" name="number_adults" id="number_adults"  min="0" max={{$sum}} onchange="myAdult()" onclick="mySummy()" >
                                    ราคา :: {{$triprounds->price_adult}}
                                    ยอดรวมผู้ใหญ่ <p id="padult"></p>

                                  สถานะการจอง  <p id="summary" ></p>

                                    ที่นั่งว่าง :: {{$sum}}   /จำนวนที่นั้งทั้งหมด ::   
                                    {{$triprounds->amount_seats}}
                                    
    </form>                      
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
            
            <a href="/bookingsum">
                <button type="button" class="btn btn-primary" data-dismiss="modal" href={{url( '/bookingsum')}}>  <i class="fa fa-bookmark"></i> จองตอนนี้</button>
                </a>
        </div>
    </div>
</div>
<script>
function myChildren() {
    var x = document.getElementById("number_children").value;
    var y = {{$triprounds->price_child}};
    document.getElementById("pchild").innerHTML =  "ราคารวมเด็กทั้งหมด"+(x*y);
}
function myAdult() {
    var x = document.getElementById("number_adults").value;
    var y = {{$triprounds->price_adult}};
    document.getElementById("padult").innerHTML = "ราคารวมผู้ใหญ่ทั้งหมด"+ (x*y);
}
function mySummy(){
    var a = document.getElementById("number_children").value;
    var b = document.getElementById("number_adults").value;
    var c = {{$triprounds->price_adult}};
    var d = {{$triprounds->price_child}};
    var nsum = ((a*d)+(b*c));
    var e = {{$triprounds->amount_seats}};
    
    var np = (a+b); 
    if(np>e){
        document.getElementById("summary").innerHTML="กรุณากรอกจำนวนคนเกิน";
    }
    else if(np<=e){
        document.getElementById("summary").innerHTML="ราคารวมทั้งหมด"+nsum+"<br>"+"จำนวนคนทั้งหมด"+np+"<br>"+"OK";
    }
    
}
</script>

@endsection