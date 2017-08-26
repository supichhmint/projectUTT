<html>

<head>
    <meta charset="utf-8">
    <title>Up To train</title>
    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- เปิดแล้ว Theme CSS -->
    <link href="/css/uptotrain2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
</head>

<body id="page-top" class="index">
    <div align="left">
        <a class="btn btn-primary" href=<?php echo e(url( '/search')); ?>>Back</a>
    </div>
    <!--<div class="container">-->
    <div class="container" id="about" align="center">
        <div class="row">
            <!-- Project Details Go Here -->
            <h1><?php echo e($trip->trips_name); ?></h1>
            <!--<p class="item-intro text-muted">จังหวัด<br>โดย "$บริษัททัวร์"</p>-->
            <p>ระยะเวลา <?php echo e($trip->trip_nday); ?> วัน <?php echo e($trip->trip_nnight); ?> คืน</p>
            <p>บริษัท <?php echo e($trip->trip_nday); ?></p>
            <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
            <p style="padding-top:20px;"><?php echo e($trip->trip_description); ?></p>
            <br><br>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">แผนการเดินทางท่องเที่ยว</h2>
                        <h3 class="section-subheading text-muted">" ไปไหนบ้างนะ "</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="timeline">
                            <!--ถ้าเลขคู่ ตรง li จะเพิ่ม class='timeline-inverted'-->
                            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div style="color:white;">
                                <h3><?php echo e($loop->iteration); ?></h3>
                            </div>
                            <?php if($loop->iteration %2 == 0): ?>
                            <li class="timeline-inverted">
                                <?php else: ?>
                                <li>
                                    <?php endif; ?>
                                    <div class="timeline-image">
                                        <img class="img-circle img-responsive" src="/img/about/1.jpg" alt="">
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>วันที่ <?php echo e($schedule->schedule_day); ?> เวลา <?php echo e($schedule->schedule_time); ?></h4>
                                            <h4 class="subheading"><?php echo e($schedule->schedule_place); ?></h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p class="text-muted"><?php echo e($schedule->schedule_description); ?></p>
                                        </div>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <li class="timeline-inverted">
                                    <div class="timeline-image">
                                        <h4>Booking</h4>
                                        <h4>now</h4>
                                    </div>
                                </li>
                        </ul>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3 class="section-subheading text-muted">ตารางราคา</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <ul class="list-inline">
                            <table class="table">
                                <tr align="center">
                                    <th>วันที่เดินทาง</th>
                                    <th>ราคาผู้ใหญ่</th>
                                    <th>ราคาเด็ก</th>
                                    <th>จำนวนที่ว่าง</th>
                                    <th></th>
                                </tr>
                                <!-- edit add loop select for db -->
                                <?php $__currentLoopData = $triprounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripround): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr align="center">
                                    <td><?php echo e($tripround->start_date); ?></td>
                                    <td><?php echo e($tripround->price_adult); ?></td>
                                    <td><?php echo e($tripround->price_child); ?></td>
                                    <td><?php echo e($tripround->amount_seats); ?></td>
                                    <?php
                                    $tid="{{$tripround->id}}"
                                    ?>
                                        <td><a class="btn btn-primary" href="/booking/<?php echo e($tripround->id); ?>" name="<?php echo e($tid); ?>">จองเลย</a></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                            <!-- end loop -->
                        </ul>
                    </div>
                    <div class="col-md-3"></div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb"
        crossorigin="anonymous"></script>
    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function () {
            /*
            var defaults = {
            	containerID: 'toTop', // fading element id
            	containerHoverID: 'toTopHover', // fading element hover id
            	scrollSpeed: 1200,
            	easingType: 'linear' 
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    
</body>

</html>