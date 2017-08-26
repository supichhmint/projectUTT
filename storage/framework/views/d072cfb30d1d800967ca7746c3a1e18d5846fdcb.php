 <?php $__env->startSection('title', 'Agency'); ?> <?php $__env->startSection('agency_banner'); ?>
<link href="css/uptotrain.min.css" rel="stylesheet">
<link href="css/login.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">HELLO <?php echo e($travelagency[0]->agency_name_en); ?> !!!!</h1>
        </div>
        <div class="col-md-12">
            <?php echo e($travelagency[0]->agency_description); ?>

        </div>
    </div>
</div>
<!-- /.row -->
<?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<div class="container" style="padding-top:30px;">
    <link href="/css/search_tripUser/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/search_tripUser/component.css" rel='stylesheet' type='text/css' />
    <div class="container">
        <div class="products-page">
            <div class="products">
                <div class="product-listy">
                    <h2>All trips</h2>
                    <ul class="product-list">
                        <li><a href="">New Trips</a></li>
                        <li><a href="">Available Tour</a></li>
                        <li><a href="">Hot Price</a></li>
                    </ul>
                </div>
            </div>
            <div class="new-product">
                <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                    <ul>
                        <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li>
                            <div class="simpleCart_shelfItem">
                                <div class="view view-first">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4><?php echo e($tripuser->trips_name); ?></h4>
                                        </div>
                                        <div class="panel-body">
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
                                                        <td style="color:lightblue">รอบ</td>
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

                    </ul>
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/search_tripUser/cbpViewModeSwitch.js" type="text/javascript"></script>
        <script src="/js/search_tripUser/classie.js" type="text/javascript"></script>
    </div>
    <div class="clearfix"></div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.agency', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>