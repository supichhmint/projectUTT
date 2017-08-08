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
                        <a href="/comment">ความคิดเห็น</a>
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
        <form action="/show" method="POST">

            <div class="row">
                <div class="col-md-12">
                    <h3>ADD TRIP </h3>
                    <hr>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="control-group form-group">
                        {{ csrf_field() }}
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>รอบของทริป</label>
                        </div>
                        <p class="help-block"></p>
                    </div>
                </div>
                <hr>
                <div class="container">
                    <!--<div class="control-group form-group con" id='controls'>-->
                    <!--for text input-->
                    <div class="row">
                        <div class="controls-group form-group con" id='controls'>
                            <div class="col-md-3">
                                <label>วันเริ่มเดินทาง</label>
                                <input class="form-control start_day" name="start_date[]" type="date" value="" oninvalid="this.setCustomValidity('กรุณากรอกวันเริ่มเดินทาง')"
    oninput="setCustomValidity('')" placeholder="วันเริ่มเดินทาง">
                            </div>
                            <div class="col-md-3">
                                <label>วันสิ้นสุดการเดินทาง</label>
                                <input class="form-control Departure_Date" name="departure_date[]" type="date" value="" oninvalid="this.setCustomValidity('กรุณากรอกวันสิ้นสุดการเดินทาง')"
    oninput="setCustomValidity('')" placeholder="วันสิ้นสุดการเดินทาง">
                            </div>
                            <br>
                            <div class="col-md-2">
                                <label>ราคาของเด็ก</label>
                                <input type="text" class="form-control" name="price_child[]" oninvalid="this.setCustomValidity('กรุณากรอกราคาของเด็ก')"
    oninput="setCustomValidity('')" placeholder="ราคาของเด็ก">
                            </div>
                            <div class="col-md-2">
                                <label>ราคาของผู้ใหญ่</label>
                                <input type="text" class="form-control" name="price_adult[]" oninvalid="this.setCustomValidity('กรุณากรอกราคาของผู้ใหญ่')"
    oninput="setCustomValidity('')" placeholder="ราคาของผู้ใหญ่">
                            </div>
                            <div class="col-md-2">
                                <label>จำนวนที่นั่งทั้งหมด </label>
                                <input type="text" class="form-control" name="amount_seats[]" oninvalid="this.setCustomValidity('กรุณากรอกจำนวนที่นั่ง')"
    oninput="setCustomValidity('')" placeholder="จำนวนที่นั่ง">
                            </div>

                        </div>
                    </div>
                    <br>
                    <label><button type="button" class="btn btn-primary" id='btn' >เพิ่มรอบถัดไป</button></label>

                    <!--</div>-->
                </div>
                <hr>
                <div class="container">
                    <div class="control-group form-group">
                        <div class="controls" id='days'>
                            <label>รายละเอียดทัวร์</label>
                            <br> 
                            <table class="table">
                                <tr>
                                    <td>วัน</td>
                                    <td>เวลา</td>
                                    <td>สถานที่</td>
                                    <td>รายละเอียด</td>
                                </tr>
                                <tr>
                                    <td><input class="form-control" name='schedule_day[]' type="text" value="1"></td>
                                    <td><input class="form-control" name='schedule_time[]' type="time"></td>
                                    <td><input class="form-control" name='schedule_place[]' type="text"></td>
                                    <td><input class="form-control" name='schedule_description[]' type="text"></td>
                                </tr>
                            </table>
                        </div>
                        <label><button type="button" class="btn btn-primary" id='nextday' >เพิ่มกิจกรรมถัดไป</button></label>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>คำอธิบาย หรือ เงื่อนไข</label>
                        <textarea rows="10" cols="100" class="form-control" id="description" oninvalid="this.setCustomValidity('กรุณากรอกคำอธิบายหรือเงื่อนไข')"
    oninput="setCustomValidity('')" placeholder="คำอธิบายหรือเงื่อนไข"
                            maxlength="999" style="resize:none" name="description"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <input type="hidden" name="trip_id" value="{{ $tripId }}">
                <!-- For success/fail messages -->
                <div align="right">
                <button type="submit" class="btn btn-primary">ตกลง</button>
            </div></div>
    </div>
    <!-- /.row -->
    </form>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#btn").click(function () {
                $("#controls").append(
                    '<div class="col-md-3"><label>วันเริ่มเดินทาง</label><input class="form-control start_day" name="start_date[]" type="date" value="" required data-validation-required-message="Please enter your ROUND TRIP"></div><div class="col-md-3">                                <label>วันเดินทางกลับ</label><input class="form-control Departure_Date" name="departure_date[]" type="date" value="" required data-validation-required-message="Please enter your ROUND TRIP"></div><br><div class="col-md-2">                               <label>ราคาเด็ก</label>                                <input type="text" class="form-control" name="price_child[]">                            </div>                            <div class="col-md-2">         <label>ราคาผู้ใหญ่</label>                                <input type="text" class="form-control" name="price_adult[]" required data-validation-required-message="Please enter Price_ADUIT ">                            </div>                            <div class="col-md-2">                                <label>จำนวนที่นั้งทั้งหมด </label>                                <input type="text" class="form-control" name="amount_seats[]" required data-validation-required-message="Please enter Price_ADUIT ">                            </div>'
                );
            })
        })
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#nextday").click(function () {
                $("#days").append(
                    '<table class="table"><tr><td>วัน</td><td>เวลา</td><td>สถานที่</td><td>รายละเอียด</td></tr><tr><td><input class="form-control"name="schedule_day[]" type="text" ></td><td><input class="form-control" name="schedule_time[]" type="time"></td><td><input class="form-control" name="schedule_place[]" type="text"></td><td><input class="form-control"name="schedule_description[]" type="text"></td></tr></table>'
                );
            })
        })
    </script>
    

































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

</html>