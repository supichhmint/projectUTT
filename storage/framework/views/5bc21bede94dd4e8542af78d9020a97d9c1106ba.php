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
                        <a href="TravelAgency_home.html">หน้าแรก</a>
                    </li>
                    <li>
                        <a href="trip_travelAgency.html">ทริป</a>
                    </li>
                    <li>
                        <a href="comment_TRIP.html">ความคิดเห็น</a>
                    </li>
                    <li>
                        <a href="#">ออกจากระบบ</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>ADD TRIP </h3>
                <form action="/addtripround" method="POST" name="id">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="row">
                        <h1>เพิ่มทริป</h1>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="control-group form-group">
                            <div class="col-md-6">
                                <div class="controls">
                                    <label>TRIP NAME</label>
                                    <input type="text" class="form-control" name="trips_name" placeholder="ชื่อทริป" required placeholder="Enter Name"
    oninvalid="this.setCustomValidity('Enter User Name Here')"
    oninput="setCustomValidity('')">
                                    <p class="help-block"></p>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="controls">
                                    <label>Day(s)</label>
                                    <input type="text" class="form-control" name="trip_nday" required data-validation-required-message="Please enter your PERIOD ">
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="controls ">
                                    <label>Night(s)</label>
                                    <input type="text" class="form-control " name="trip_nnight" required data-validation-required-message="Please enter your PERIOD ">
                                </div>
                            </div>
                            <div class="col-md-2 ">
                                <div class="controls ">
                                    <label>Meal(s)</label>
                                    <input type="text" class="form-control " name="trip_meal" required data-validation-required-message="Please enter your PERIOD ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="control-group form-group ">
                            <div class="col-md-6 ">
                                <div class="controls ">
                                    <label>Province : </label>
                                    <input type="text" class="form-control " name="trip_province" required data-validation-required-message="Please enter TRAVEL COUNTRY ">
                                </div>
                            </div>
                            <div class="control-group form-group ">
                                <div class="col-md-6 ">
                                    <div class="controls ">
                                        <label>Description</label>
                                        <textarea rows="10 " cols="100 " class="form-control" name="trip_description" required data-validation-required-message="Please enter your description " maxlength="999 "
                                            style="resize:none "></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <div align="right">
                        <button type='submit' class='btn btn-primary'>submit</button>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.row -->

    </div>
    <!-- Footer 
    <footer>
        <div class="row ">
            <div class="col-lg-12 ">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js "></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js "></script>

    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>