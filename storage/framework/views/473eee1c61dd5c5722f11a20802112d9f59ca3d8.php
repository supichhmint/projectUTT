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
                        <a href="TravelAgency_home.html">H0ME</a>
                    </li>
                    <li>
                        <a href="trip_travelAgency.html">TRIP</a>
                    </li>
                    <li>
                        <a href="comment_TRIP.html">COMMENT</a>
                    </li>
                    <li>
                        <a href="#">  LOG OUT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="container">
<<<<<<< HEAD
        <div class="row">
        <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-8">
            
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">
  <?php echo e($d->trips_name); ?>

  </div>
  <div class="panel-body">
     <?php echo e($d->trip_description); ?>

  </div>

  <!-- Table -->
  <table class="table">
 
    <tr>
        <td>
    <?php echo e($d->id); ?>

        <td>
    </tr>
    <tr>
        <td>
    <?php echo e($d->id); ?>

        <td>
    </tr>
    <tr>
        <td>
    <?php echo e($d->id); ?>

        <td>
    </tr>
    <tr>
        <td>
    <?php echo e($d->id); ?>

        <td>
    </tr>
    
  </table>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
  <input type="hidden" value="<?php echo e($tripId); ?>" name="tripId">
<hr>
=======
        <div class="form">
            <div class="row">
                <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <!-- Default panel contents -->
                        <div class="panel-heading">
                            <?php echo e($d->trips_name); ?>

                        </div>
                        <div class="panel-body">
                            <?php echo e($d->trip_description); ?>

                        </div>
                        <!-- Table -->
                        <table class="table">

                            <tr>
                                <td>
                                    <?php echo e($d->id); ?>

                                    <td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo e($d->id); ?>

                                    <td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo e($d->id); ?>

                                    <td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo e($d->id); ?>

                                    <td>
                            </tr>

                        </table>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
    </div>
    <hr>
>>>>>>> 66c01366c1f5d27fb092a38ee3e104763a17d7d1
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

</html>