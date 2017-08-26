<<<<<<< HEAD
 
<?php $__env->startSection('title', 'booking'); ?> 
<?php $__env->startSection('content'); ?>

<!-- newedit About Section -->
<!--<section id="about" align="center"  padding-top= "50%">-->
<!--<div class="container">-->
<div class="welcome about">
=======
<html>

<head>
  <title>Up To train - Booking</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
        <link href="css/bootstrap2.css" type="text/css" rel="stylesheet" media="all">
    <![endif]-->
</head>

<body>
  <!-- banner -->
  <div class="banner about-banner" style="background-image:url('img/2.jpg')">
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

    </div>
    <!-- //header -->
    <div class="banner-text">
      <div class="container">
        <div class="banner-w3lstext" style="padding-top:74px;">
          <h2>Let's Have Fun With Train </h2>
        </div>
      </div>
    </div>
  </div>


<div class="welcome about">

>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
    <div class="container" align="center">
        <div class="row">
        <?php $__currentLoopData = $trip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trips): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <h2><?php echo e($trips->trips_name); ?></h2>
                <h5><?php echo e($trips->trip_nday); ?>วัน <?php echo e($trips->trip_nnight); ?>คืน</h5>
<<<<<<< HEAD
                <p><?php echo e($trips->trip_province); ?></p>
                <p><?php echo e($trips->trip_meal); ?></p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p></p>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
=======
                <p>จังหวัด<?php echo e($trips->trip_province); ?></p>
                <p><?php echo e($trips->trip_meal); ?>มื้อ</p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline">
<<<<<<< HEAD
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
                                     
                                        <?php echo e($triprounds->start_date); ?> - <?php echo e($triprounds->departure_date); ?>

                                       
                                </td>

                                <td>
                                    จำนวนเด็ก 
                                </td>

                                <td>
                                   จำนวนผู้ใหญ่
                                </td>

                                <td>
                                     <?php echo e($triprounds->amount_seats); ?>

                                </td>


                            </tr>
                        </table>
                        <!-- end loop -->
=======
                   
                   
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
                  
                      
                    <form >                           
                                รอบวันที่ <?php echo e($triprounds->start_date); ?> - <?php echo e($triprounds->departure_date); ?>  

                            <br>
                                    จำนวนเด็ก 
                   <input type ="number" name="number_children" id="number_children" min="0" max=<?php echo e($sum); ?> value ="0"  onchange="myChildren()" onclick="mySummy()" >
                                    ราคา :: <?php echo e($triprounds->price_child); ?>

                                    ยอดรวมเด็ก<p id="pchild"></p>
                                    
                            <br>
                            
                            
                                   จำนวนผู้ใหญ่ 
                                   <input type ="number" name="number_adults" id="number_adults"  min="0" max=<?php echo e($sum); ?>  value ="0" onchange="myAdult()" onclick="mySummy()" >
                                    ราคา :: <?php echo e($triprounds->price_adult); ?>

                                    ยอดรวมผู้ใหญ่ <p id="padult"></p>

                                  สถานะการจอง  <p id="summary" ></p>

                                    ที่นั่งว่าง :: <?php echo e($sum); ?>   /จำนวนที่นั้งทั้งหมด ::   <?php echo e($triprounds->amount_seats); ?>

                                    
    </form>                      
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
<<<<<<< HEAD
=======
            
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
            <a href="/bookingsum">
                <button type="button" class="btn btn-primary" data-dismiss="modal" href=<?php echo e(url( '/bookingsum')); ?>>  <i class="fa fa-bookmark"></i> จองตอนนี้</button>
                </a>
        </div>
    </div>
</div>


<<<<<<< HEAD



=======
<div>===================================================</div>
<script>
function myChildren() {
    var x = document.getElementById("number_children").value;
    var y = <?php echo e($triprounds->price_child); ?>;
    document.getElementById("pchild").innerHTML =  "ราคารวมเด็กทั้งหมด"+x*y;
}
function myAdult() {
    var x = document.getElementById("number_adults").value;
    var y = <?php echo e($triprounds->price_adult); ?>;
    document.getElementById("padult").innerHTML = "ราคารวมผู้ใหญ่ทั้งหมด"+ x*y;
}
function mySummy(){
    var a =document.getElementById("number_children").value;
    var b = document.getElementById("number_adults").value;
    var c = <?php echo e($triprounds->price_adult); ?>;
    var d = <?php echo e($triprounds->price_child); ?>;
    var nsum = (a*d)+(b*c);
    var e = <?php echo e($triprounds->amount_seats); ?>;
    console.log(e);
    var np = parseInt(a)+parseInt(b); 
    if(np>e){
        document.getElementById("summary").innerHTML="กรุณากรอกจำนวนคนเกิน";
    }
    else{
        document.getElementById("summary").innerHTML=" ราคารวมทั้งหมด"+nsum+"<br>"+"จำนวนคนทั้งหมด"+np+"<br>"+"OK";
    }
    
}
</script>
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745

<!--</section>-->

<!-- jQuery -->
<<<<<<< HEAD
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
=======


<!-- Plugin JavaScript -->

</script>
</html>
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
