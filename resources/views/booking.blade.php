@extends('layouts.headuser') 
@section('title', 'booking') 
@section('content')

<!-- newedit About Section -->
<!--<section id="about" align="center"  padding-top= "50%">-->
<!--<div class="container">-->
<div class="welcome about">
    <div class="container" align="center">
        <div class="row">
        @foreach($trip as $trips)
            <div>
                <h2>{{$trips->trips_name}}</h2>
                <h5>{{$trips->trip_nday}}วัน {{$trips->trip_nnight}}คืน</h5>
                <p>{{$trips->trip_province}}</p>
                <p>{{$trips->trip_meal}}</p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p></p>
            </div>
@endforeach
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline">
                        <table class="table">
                            <tr>
                                <th>รอบวันที่</th>
                                <th>จำนวนผู้ใหญ่</th>
                                <th>จำนวนเด็ก</th>
                                <th>จำนวนที่ว่าง</th>
                            </tr>
                            <!-- edit add loop select for db -->

                            
                            <tr>
                                <td>
                                     
                                        {{$triprounds->start_date}} - {{$triprounds->departure_date}}
                                       
                                </td>

                                <td>
                                    จำนวนเด็ก 
                                </td>

                                <td>
                                   จำนวนผู้ใหญ่
                                </td>

                                <td>
                                     {{$triprounds->amount_seats}}
                                </td>


                            </tr>
                        </table>
                        <!-- end loop -->
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






<!--</section>-->

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
    crossorigin="anonymous"></script>

<!-- Contact Form JavaScript -->
<script src="js/jqBootstrapValidation.js"></script>
<script src="js/contact_me.js"></script>

<!-- Theme JavaScript -->
<script src="js/agency.min.js"></script>

</body>

</html>

@endsection('content')