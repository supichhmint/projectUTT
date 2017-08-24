 
<?php $__env->startSection('title', 'booking'); ?> 
<?php $__env->startSection('content'); ?>

<!-- newedit About Section -->
<!--<section id="about" align="center"  padding-top= "50%">-->
<!--<div class="container">-->
<div class="welcome about">
    <div class="container" align="center">
        <div class="row">
        <?php $__currentLoopData = $trip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trips): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <h2><?php echo e($trips->trips_name); ?></h2>
                <h5><?php echo e($trips->trip_nday); ?>วัน <?php echo e($trips->trip_nnight); ?>คืน</h5>
                <p><?php echo e($trips->trip_province); ?></p>
                <p><?php echo e($trips->trip_meal); ?></p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p></p>
            </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline">
                    <script>
                        var a =  <?php echo e($triprounds->amount_seats); ?>

                        console.log("a:",a);
                    </script>   
                    <form >                           
                                รอบวันที่ <?php echo e($triprounds->start_date); ?> - <?php echo e($triprounds->departure_date); ?>  

                            <br>
                                    จำนวนเด็ก 
                                    <input type ="number" name="number_children"  min="0" max="<?php echo e($triprounds->amount_seats); ?>">
                                    ราคา :: <?php echo e($triprounds->price_child); ?>

                                    
                            <br>
                                   จำนวนผู้ใหญ่<input type ="number" name="number_adults"  min="0" max="<?php echo e($triprounds->amount_seats); ?>">
                                ราคา :: <?php echo e($triprounds->price_adult); ?>


                                จำนวนที่นั้งทั้งหมด ::   <?php echo e($triprounds->amount_seats); ?>

                                เว้น <?php echo e($booking[0]->number_booking); ?>




    </form>                      
                    </ul>
                </div>
                <div class="col-md-3"></div>
            </div>
            <a href="/bookingsum">
                <button type="button" class="btn btn-primary" data-dismiss="modal" href=<?php echo e(url( '/bookingsum')); ?>>  <i class="fa fa-bookmark"></i> จองตอนนี้</button>
                </a>
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

</body>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headuser', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>