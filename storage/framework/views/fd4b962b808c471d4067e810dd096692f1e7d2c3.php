<<<<<<< HEAD

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
=======
 
<?php $__env->startSection('title', 'Search Trip'); ?> 
<?php $__env->startSection('content'); ?>


<!-- Page Content -->
<div class="welcome about" style="padding-top:0px;padding-bottom:0px;">
    <div class="container" align="center">
        <!-- search panel -->
        <div class="newsletter">
            <div class="container">
                <h3 class="agileits-title">Our Tours</h3>
                <form action="searcht" method="post" role="searcht">
                    <?php echo e(csrf_field()); ?>

                    <input type="text" name="q" placeholder="Enter destination..." required="">
                    <input type="submit" value="search">
                    <div class="clearfix"> </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/tether/tether.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?> 
<?php $__env->startSection('tripuser'); ?>

<div class="container">
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
                <div class="tags">
                    <h4 class="tag_head">Tags Widget</h4>
                    <ul class="tags_links">
                        <li><a href="/search?=หัวหิน">หัวหิน</a></li>
                        <li><a href="#">เชียงใหม่</a></li>
                        <li><a href="#">กรุงเทพฯ</a></li>
                        <li><a href="#">กาญจนบุรี</a></li>
                        <li><a href="#">แพร่</a></li>
                        <li><a href="#">นครปฐม</a></li>
                        <li><a href="#">อุดรธานี</a></li>
                        <li><a href="#">ขอนแก่น</a></li>
                        <li><a href="#">ชลบุรี</a></li>
                        <li><a href="#">สุราษฐ์ธานี</a></li>
                        <li><a href="#">ภูเก็ต</a></li>
                    </ul>
                </div>
            </div>
            <div class="new-product">
                <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                    <div class="cbp-vm-options">
                        <a href="#" class="cbp-vm-grid" data-view="cbp-vm-view-grid" title="grid"></a>
                        <a href="#" class="cbp-vm-list" data-view="cbp-vm-view-list" title="list"></a>
                    </div>
                    <div class="pages">
                        <h4><?php echo e($trips->total()); ?> total trips</h4>
                        <h5>In this page <?php echo e($trips->count()); ?> trips</h5>
                    </div>
                    <div class="clearfix"></div>
                    <ul>
                        <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
            $tripagent = DB::table('travelagency')->where('id', $tripuser->travelagency_id)->first();
            
            $tripround = DB::table('triprounds')->where('trip_id', $tripuser->id)->get();
            ?>
<<<<<<< HEAD
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


=======
                            <li>
                                <a class="cbp-vm-image" href="/schedule/<?php echo e($tripuser->id); ?>">
                                    <div class="simpleCart_shelfItem">
                                        <div class="view view-first">
                                            <div class="inner_content clearfix">
                                                <div class="product_image">
                                                    <img src="http://placehold.it/500x400" class="img-responsive" alt="" />
                                                    <div class="mask">
                                                        <div class="info">Quick View</div>
                                                    </div>
                                                    <div class="product_container">
                                                        <div class="cart-left">
                                                            <p class="title"><?php echo e($tripuser->trips_name); ?></p>
                                                            <p>จังหวัด <?php echo e($tripuser->trip_province); ?></p>
                                                            <p>บริษัท <?php echo e($tripagent->agency_name_en); ?></p><br>
                                                            <p>ระยะเวลา <?php echo e($tripuser->trip_nday); ?> วัน <?php echo e($tripuser->trip_nnight); ?>

                                                                คืน
                                                            </p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <div class="cbp-vm-details">
                                    <p><?php echo e($tripuser->trip_description); ?></p>
                                </div>
                                <a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>

                </div>
                <div align="center">
                    <?php echo e($trips->render()); ?>

                </div>
            </div>
        </div>
    </div>
    <script src="/js/search_tripUser/cbpViewModeSwitch.js" type="text/javascript"></script>
    <script src="/js/search_tripUser/classie.js" type="text/javascript"></script>
</div>
<div class="clearfix"></div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headIndex', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
>>>>>>> bc36f2b412cbc0229bfca0fb6d464786417f8745
