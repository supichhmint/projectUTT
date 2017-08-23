 
<?php $__env->startSection('title', 'booking'); ?> 
<?php $__env->startSection('content'); ?>

<div align="right">
    <button type="button" class="btn btn-default btn-lg">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Close
            </button>
</div>
<!--<div class="container">-->
<div class="container" id="about" align="center">
    <div class="row">
        <div class="modal-body">
            <!-- Project Details Go Here -->
            <h2><?php echo e($trip->trips_name); ?></h2>
            <!--<p class="item-intro text-muted">จังหวัด<br>โดย "$บริษัททัวร์"</p>-->
            <p>ระยะเวลา <?php echo e($trip->trip_nday); ?> วัน <?php echo e($trip->trip_nnight); ?> คืน</p>
            <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
            <p><?php echo e($trip->trip_description); ?></p>

            <br><br>

            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">Schedule</h2>
                        <h3 class="section-subheading text-muted">" ไปไหนบ้างนะ "</h3>

                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <ul class="timeline">
                            <!--ถ้าเลขคู่ ตรง li จะเพิ่ม class='timeline-inverted'-->
                            <?php $__currentLoopData = $schedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h3><?php echo e($loop->iteration); ?></h3>
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
                                        <h4>Booking
                                            <br><br>Now!
                                        </h4>
                                    </div>
                                </li>
                        </ul>
                    </div>

                </div>

                <br><br>

                <!--<ul class="list-inline">
                                    <li>Travel Agency: abc company</li>
                                    <li>Date: ?วัน ?คืน</li>
                                    <li>Cost: ? baht</li>
                                </ul>-->
                <!-- ADD table round -->

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <ul class="list-inline">
                            <table class="table">
                                <tr>
                                    <th>รอบวันที่</th>
                                    <th>ราคาผู้ใหญ่</th>
                                    <th>ราคาเด็ก</th>
                                    <th>จำนวนที่ว่าง</th>
                                </tr>
                                <!-- edit add loop select for db -->
                                <?php $__currentLoopData = $triprounds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripround): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($tripround->start_date); ?></td>
                                    <td><?php echo e($tripround->price_adult); ?></td>
                                    <td><?php echo e($tripround->price_child); ?></td>
                                    <td><?php echo e($tripround->amount_seats); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                            <!-- end loop -->
                        </ul>
                    </div>
                    <div class="col-md-3"></div>
                </div>

                <a class="btn btn-primary" href=<?php echo e(url( '/search')); ?>>  <i class="fa fa-times"></i> Close This</a>
            </div>
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
<?php $__env->stopSection(); ?> 

<?php echo $__env->make('layouts.headindex', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>