<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UP TO TRAIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/travelAgency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container">
        <div class="col-lg-12">
            <h2 class="page-header">HELLO <?php echo e($trips[0]->agency_name_en); ?> !!!!</h2>
        </div>
        <div class="col-md-6">

           
          <?php echo e($trips[0]->agency_description); ?>

        </div>

    </div>
    <!-- /.row -->

    <!--TRIP STATUS-->


    <div class="container">
        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <diV><h1 class="page-header">OUR TRIP</h1>
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
 <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trip): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i><?php echo e($trip->trips_name); ?></h4>
                    </div>

                    <div class="panel-body">

                        <a href="portfolio-item.html">
                            <img class="img-responsive img-portfolio img-hover" src="<?php echo e(asset( $trip->trip_pic )); ?>" >
                        </a>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span> 40% BOOKING
                        </div>

                    </div>
                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <td><?php echo e($trip->start_date); ?> - <?php echo e($trip->departure_date); ?></td>
                            
                        </tr>
                        <tr>
                            <td>NUMBER OF ADULT</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>TOTAL</td>
                            <td>100</td>

                        </tr>
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
        <!-- /.row -->





        <hr>

        <!-- Footer -->
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
<?php $__env->stopSection(); ?>
</html>

<?php echo $__env->make('layouts.headlogo', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>