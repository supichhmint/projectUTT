<html>

<head>
  <title>Up To train - Booking</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap Core CSS -->
  <link href="/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="/vendor/font-awesome/css/font-awesome.min.css" re l="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!--Theme CSS-->
  <link href="/css/uptotrain2.min.css" rel="stylesheet">


  <link href="/css/style.css" type="text/css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="/css/swipebox.css">
  <link rel="stylesheet" href="/css/ziehharmonika.css">
  <!-- //Custom Theme files -->
  <!-- font-awesome icons -->
  <link href="/css/font-awesome.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!-- js -->
  <script src="/js/jquery-2.2.3.min.js"></script>
  <!-- //js -->
  <!-- web-fonts -->
  <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
    rel='stylesheet' type='text/css'>
  <link href="//fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
</head>

<body>
  <!-- banner -->

  <div class="header agileinfo-header">
    <!-- header -->
    <nav id="mainNav" class="navbar-inverse navbar-custom2 navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
          <a class="navbar-brand page-scroll" href="#page-top">Up To Train</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right" style="padding-top:0px;">

            <li>
              <a href="#services">Agreement</a>
            </li>
            <li>
              <a href="#about">Search</a>
            </li>
            <li>
              <a href="#portfolio">Highlight</a>
            </li>
            <li>
              <a href="#team">Railway</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>

        </div>
      </div>
      <!-- /.container-fluid -->
    </nav>

    <!-- //header -->

  </div>
  <div class="welcome about" style="padding-top:90px;">
    <div class="container" align="center">
      <div class="row">
        @foreach($trip as $trips)
        <div>
          <h1>{{$trips->trips_name}}</h1>
          <p>{{$trips->trip_nday}}วัน {{$trips->trip_nnight}}คืน</p>
          <p>จังหวัด{{$trips->trip_province}}</p>
          <p>{{$trips->trip_meal}}มื้อ</p>
          <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
          <p></p>
        </div>
        @endforeach
        <div class="row">
          
          <div class="col-md-6">
            <ul class="list-inline">
              <?php
                    if($count == 0){
                        $sum = $triprounds->amount_seats;
                    }
                    else if($count > 0 ){
                        $amount =  $triprounds->amount_seats;
                        $nbooking  = $booking[0]->number_booking;
                        $sum = $amount-$nbooking;
                    }
                      $bookId = $triprounds->id;      
                    ?>
                <form action="/bookingsum" method="POST" name="id">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                 {{ csrf_field() }}
                 <input type="hidden" name="book_id" value="{{ $bookId }}">
                  รอบวันที่ {{date('d-m-Y', strtotime($triprounds->start_date))}} ถึง {{date('d-m-Y', strtotime($triprounds->departure_date))}}
                  <br> จำนวนเด็ก
                  <input type="number" name="number_children" id="number_children" min="0" max={{$sum}} value="0" onchange="myChildren()" onclick="mySummy()">                  ราคา :: {{$triprounds->price_child}} ยอดรวมเด็ก
                  <p id="pchild"></p>

                  <br> จำนวนผู้ใหญ่
                  <input type="number" name="number_adults" id="number_adults" min="0" max={{$sum}} value="0" onchange="myAdult()" onclick="mySummy()">                  
                  ราคา :: {{$triprounds->price_adult}} 
                  ยอดรวมผู้ใหญ่
                  <p id="padult"></p>
                  สถานะการจอง
                  <p id="summary"></p>
                  ที่นั่งว่าง :: {{$sum}} /จำนวนที่นั่งทั้งหมด :: {{$triprounds->amount_seats}}

                  จำนวนคนจองทั้งหมด : 
                  <input type="number" name="number_booking" id="number_booking" >
                  <br>
                    
                  ราคารวมทั้งหมด :
                  <!-- <p id="total_cost" name="total_cost" ></p> -->
                   <input type="number" name="total_cost" id="total_cost" >
                    
                   <button type="submit" class="btn btn-primary">จองตอนนี้</button>
                </form>
            </ul>
          </div>
          <div class="col-md-3"></div>
        </div>
                 
                
                 
        
            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

 <script>
  function myChildren() {
    var x = document.getElementById("number_children").value;
    var y = {{$triprounds -> price_child}};
    document.getElementById("pchild").innerHTML = "ราคารวมเด็กทั้งหมด" + x * y;
  }
  
  function myAdult() {
    var x = document.getElementById("number_adults").value;
    var y = {{$triprounds -> price_adult}};
    document.getElementById("padult").innerHTML = "ราคารวมผู้ใหญ่ทั้งหมด" + x * y;
  }

  function mySummy() {
    var a = document.getElementById("number_children").value;
    var b = document.getElementById("number_adults").value;
    var c = {{$triprounds -> price_adult}};
    var d = {{$triprounds -> price_child}};
    var nsum = (a * d) + (b * c);
    var e = {{$triprounds -> amount_seats}};

    var np = parseInt(a) + parseInt(b);
    if (np > e) {
      document.getElementById("summary").innerHTML = "กรุณากรอกจำนวนคนเกิน";
    } else {
      document.getElementById("summary").innerHTML = "OK";
      document.getElementById("number_booking").value = np;
      document.getElementById("total_cost").value = nsum;
    }

  }
</script>
<script src="vendor/jquery/jquery.min.js"></script>		
  		  
 -<!-- Bootstrap Core JavaScript -->		
 -<script src="vendor/bootstrap/js/bootstrap.min.js"></script>		
  		  
  <!-- Plugin JavaScript -->		  <!-- Plugin JavaScript -->
 -<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"		
 -    crossorigin="anonymous"></script>		
 -		
 -<!-- Contact Form JavaScript -->		
 -<script src="js/jqBootstrapValidation.js"></script>		
 -<script src="js/contact_me.js"></script>		
 -		
 -<!-- Theme JavaScript -->		
 -<script src="js/agency.min.js"></script>		
 -		
 -</body>		
  		  
 -</html>
</html>