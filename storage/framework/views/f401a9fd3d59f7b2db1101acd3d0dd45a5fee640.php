 
<?php $__env->startSection('title', 'booking'); ?> 
<?php $__env->startSection('content'); ?>

<div class="welcome about">

    <div class="container" align="center">
        <div class="row">
        <?php $__currentLoopData = $trip; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $trips): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <h2><?php echo e($trips->trips_name); ?></h2>
                <h5><?php echo e($trips->trip_nday); ?>วัน <?php echo e($trips->trip_nnight); ?>คืน</h5>
                <p>จังหวัด<?php echo e($trips->trip_province); ?></p>
                <p><?php echo e($trips->trip_meal); ?>มื้อ</p>
                <img class="img-responsive img-centered" src="/img/portfolio/trip1_00.jpg" alt="">
                <p></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <ul class="list-inline">
                   
                   
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
                    <form>                           
                                รอบวันที่ <?php echo e($triprounds->start_date); ?> - <?php echo e($triprounds->departure_date); ?>  
                            <br>
                                    จำนวนเด็ก 
                   <input type ="number" name="number_children" id="number_children" min="0" max=<?php echo e($sum); ?> onchange="myChildren()" onclick="mySummy()" >
                                    ราคา :: <?php echo e($triprounds->price_child); ?>

                                    ยอดรวมเด็ก<p id="pchild"></p>
                            <br>
                            
                            
                                   จำนวนผู้ใหญ่ 
                                   <input type ="number" name="number_adults" id="number_adults"  min="0" max=<?php echo e($sum); ?> onchange="myAdult()" onclick="mySummy()" >
                                    ราคา :: <?php echo e($triprounds->price_adult); ?>

                                    ยอดรวมผู้ใหญ่ <p id="padult"></p>

                                  สถานะการจอง  <p id="summary" ></p>

                                    ที่นั่งว่าง :: <?php echo e($sum); ?>   /จำนวนที่นั้งทั้งหมด ::   
                                    <?php echo e($triprounds->amount_seats); ?>

                                    
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
<script>
function myChildren() {
    var x = document.getElementById("number_children").value;
    var y = <?php echo e($triprounds->price_child); ?>;
    document.getElementById("pchild").innerHTML =  "ราคารวมเด็กทั้งหมด"+(x*y);
}
function myAdult() {
    var x = document.getElementById("number_adults").value;
    var y = <?php echo e($triprounds->price_adult); ?>;
    document.getElementById("padult").innerHTML = "ราคารวมผู้ใหญ่ทั้งหมด"+ (x*y);
}
function mySummy(){
    var a = document.getElementById("number_children").value;
    var b = document.getElementById("number_adults").value;
    var c = <?php echo e($triprounds->price_adult); ?>;
    var d = <?php echo e($triprounds->price_child); ?>;
    var nsum = ((a*d)+(b*c));
    var e = <?php echo e($triprounds->amount_seats); ?>;
    
    var np = (a+b); 
    if(np>e){
        document.getElementById("summary").innerHTML="กรุณากรอกจำนวนคนเกิน";
    }
    else if(np<=e){
        document.getElementById("summary").innerHTML="ราคารวมทั้งหมด"+nsum+"<br>"+"จำนวนคนทั้งหมด"+np+"<br>"+"OK";
    }
    
}
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agency', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>