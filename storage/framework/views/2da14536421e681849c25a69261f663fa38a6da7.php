 
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
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/tether/tether.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('tripuser'); ?>
</div>
<div class="container">

    <link href="css/search_tripUser/style.css" rel="stylesheet" type="text/css" />
    <link href="css/search_tripUser/component.css" rel='stylesheet' type='text/css' />

    <div class="container">
        <div class="products-page">
            <div class="products">
                <div class="product-listy">
                    <h2>our Products</h2>
                    <ul class="product-list">
                        <li><a href="">New Products</a></li>
                        <li><a href="">Old Products</a></li>
                        <li><a href="">T-shirts</a></li>
                        <li><a href="">pants</a></li>
                        <li><a href="">Dress</a></li>
                        <li><a href="">Shorts</a></li>
                        <li><a href="#">Shirts</a></li>
                        <li><a href="register.html">Register</a></li>
                    </ul>
                </div>
                <div class="tags">
                    <h4 class="tag_head">Tags Widget</h4>
                    <ul class="tags_links">
                        <li><a href="#">หัวหิน</a></li>
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
                        <a href="#" class="cbp-vm-icon cbp-vm-grid" data-view="cbp-vm-view-grid" title="grid"></a>
                        <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list"></a>
                    </div>
                    <?php if(isset($details)): ?>
                    <div class="pages">
                        <h4><?php echo e($details->total()); ?> total trips</h4>
                        <h5>In this page <?php echo e($details->count()); ?> trips</h5> 
                    </div>
                    <div class="clearfix"></div>
                <p> The Search results for your destination <b> <?php echo e($query); ?> </b> are :</p>
                <ul>
                    <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="cbp-vm-image" href="/schedule/<?php echo e($user->id); ?>">
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
                                                    <p class="title"><?php echo e($user->trips_name); ?></p>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="cbp-vm-details">
                            Kohlrabi bok choy broccoli rabe welsh onion spring onion tatsoi ricebean kombu chard.
                        </div>
                        <a class="cbp-vm-icon cbp-vm-add item_add" href="#">Add to cart</a>
                    </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
                 
                <?php elseif(isset($message)): ?>
                <p><?php echo e($message); ?></p>
                <?php endif; ?>
               
            </div>
            <script src="js/search_tripUser/cbpViewModeSwitch.js" type="text/javascript"></script>
            <script src="js/search_tripUser/classie.js" type="text/javascript"></script>
        </div>
        <div class="clearfix"></div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headindex', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>