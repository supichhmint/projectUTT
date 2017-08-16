
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

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
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
                <a class="navbar-brand" href="/home">UP TO TRAIN</a>
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



    <!-- Page Content -->
     <div class="container">

        <!-- Page Heading -->
        <div class="row">
        <h2 >รวมทริป</h2>
</div>
<hr>
        <!-- Project One -->
        
        <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-md-6">
            <div class="clearfix"
                <a href="#">
                    <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/500x400" alt="">
                </a>
                </div>
            </div>
            <?php
            $tripagent = DB::table('travelagency')->where('id', $tripuser->travelagency_id)->first();
            
            $tripround = DB::table('triprounds')->where('trip_id', $tripuser->id)->get();
            ?>
            <div class="col-md-6">
                <h3><?php echo e($tripuser->trips_name); ?> </h3>
                <p>จังหวัด <?php echo e($tripuser->trip_province); ?> | โดย บริษัท <?php echo e($tripagent->agency_name_en); ?></p><br>
  
                <p>ระยะเวลา <?php echo e($tripuser->trip_nday); ?> วัน  <?php echo e($tripuser->trip_nnight); ?> คืน</p>
                <p><?php echo e($tripuser->trip_description); ?></p>
                <p> <!-- ADD table round -->
                <table class="table">
                     <tr>
                        <th>รอบวันที่</th>
                        <th>ราคาผู้ใหญ่</th>
                        <th>ราคาเด็ก</th>
                        <th>จำนวนที่ว่าง</th>
                    </tr>
        <!-- edit add loop select for db -->
        
                    
                        <?php $__currentLoopData = $tripround; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($tripr->start_date); ?> ถึง <?php echo e($tripr->departure_date); ?></td>
                        <td><?php echo e($tripr->price_adult); ?></td>
                        <td><?php echo e($tripr->price_child); ?></td>
                        <td><?php echo e($tripr->amount_seats); ?></td>
                    </tr> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </table>
        <!-- end loop --></p>
       <?php
            $tid="{{$tripuser->id}}"
           
            ?>
       
                <a class="btn btn-primary" href="/schedule/<?php echo e($tripuser->id); ?>" name ="<?php echo e($tid); ?>">ดูรายการทัวร์นี้</a>
            </div>
        </div>
        <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <!-- /.row -->

    


        <!-- Pagination 
        <div align="center">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item">
                <a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">2</a></li>
            <li class="page-item">
                <a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
        </div>
    </div>
    <!-- /.container -->



    <!-- Footer 
    <footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Up To Train 2017</p>
        </div>
        
    </footer>
<!-- /.container -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>


