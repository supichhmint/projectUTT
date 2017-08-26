<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UP TO TRAIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
<link href="/css/uptotrain.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">UP TO TRAIN</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/agency">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="/addtrip">เพิ่มทริป</a>
                    </li>
                    <li>
                        <a href="/comment">*ความคิดเห็น</a>
                    </li>
                    <li>
                        <a href="#">*ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <body>

        <div class="container">
        <div class="row">
        <div class="col-lg-12">
        <label>!!!!!</label>
        </div>
        </div>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">HELLO <?php echo e($travelagency[0]->agency_name_en); ?> !!!!</h1>
                </div>
                <div class="col-md-12">


                    <?php echo e($travelagency[0]->agency_description); ?>

                </div>

            </div>
            <!-- /.row -->

            <!--TRIP STATUS-->


            <div class="container">
                <!-- Marketing Icons Section -->
                <div class="row">
                    <div class="col-lg-12">
                        <diV>
                            <h1 class="page-header">ทริปทั้งหมด</h1>
                        </div>
                    </div>
                    <!--<div class="col-md-4">
               <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-plus"></i>ADD TRIP </h4>
                    </div>
                    <div class="panel-body">
                        <a href="/addtrip"><img class="img-responsive img-portfolio img-hover " src="pic/ADD1.png" alt=""></a>
                    </div>
                </div>
            </div>-->

                    <div class="container">
                        <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4><?php echo e($tripuser->trips_name); ?></h4>
                                </div>

                                <div class="panel-body">

                                    <a href="portfolio-item.html">
                                        <img class="img-responsive img-portfolio img-hover" src="">
                                    </a>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span> 40% BOOKING
                                        </div>

                                    </div>
                                    <!-- Table -->
                                    <table class="table">
                                        <!--problem ตรงนี้ไม่รัน -->
                                          <?php
                                            $tripagent = DB::table('travelagency')->where('id', $tripuser->travelagency_id)->first();
                                            
                                            $tripround = DB::table('triprounds')->where('trip_id', $tripuser->id)->get();
                                            ?>
                                        <?php $__currentLoopData = $tripround; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                        <td color:lightblue>รอบ</td>
                                            <td><?php echo e($tr->start_date); ?> ถึง <?php echo e($tr->departure_date); ?></td>

                                        </tr>
                                        <tr>
                                            <td>จำนวนที่นั่ง</td>
                                            <td><?php echo e($tr->amount_seats); ?></td>
                                        </tr>
                                        <tr>
                                            <td>จำนวนที่จอง</td>
                                            <td><?php echo e($tr->amount_seats); ?></td>

                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </table>
                                   
                                </div>
                            </div>

                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>


                    <!-- Marketing Icons Section -->








                    <!-- Page Content -->
                    <div class="container">

                        <!-- Marketing Icons Section -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h1 class="page-header">
                                    COMMENTION
                                </h1>
                            </div>


                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4><i class="glyphicon glyphicon-pencil"></i>TRIP </h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <div class="alert alert-success" role="alert">
                                                Well done! You have n new COMMENTION .
                                            </div>
                                        </p>
                                        <a href="comment_TRIP.html" class="btn btn-default">SHOW NOW</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4><i class="glyphicon glyphicon-pencil"></i>COMPANY </h4>
                                    </div>
                                    <div class="panel-body">
                                        <p>
                                            <div class="alert alert-success" role="alert">
                                                Well done! You have n new COMMENTION .
                                            </div>
                                        </p>
                                        <a href="comment_TRIP.html" class="btn btn-default">SHOW NOW</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <hr>

                        <!-- Footer 
                <footer>
                    <div class="row">
                        <div class="col-lg-12">
                            <p>Copyright &copy; Your Website 2014</p>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- /.container -->

                        <!-- jQuery -->
                        <script src="js/jquery.js"></script>

                        <!-- Bootstrap Core JavaScript -->
                        <script src="js/bootstrap.min.js"></script>

                        <!-- Script to Activate the Carousel -->
                        <script>
                            $('.carousel').carousel({
                                interval: 5000 //changes the speed
                            })
                        </script>

    </body>

</html>