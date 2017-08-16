 
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
<div class="container">
        <?php if(isset($details)): ?>
        <p> The Search results for your query <b> <?php echo e($query); ?> </b> are :</p>
        <h2>Sample User details</h2>
        <table class="table table-striped">
            <thead>
                <tr> 
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->trips_name); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php elseif(isset($message)): ?>
        <p><?php echo e($message); ?></p>
        <?php endif; ?>
    </div>
</div>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/tether/tether.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('tripuser'); ?>

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
                    <li><a href="#">Kitesurf</a></li>
                    <li><a href="#">Super</a></li>
                    <li><a href="#">Duper</a></li>
                    <li><a href="#">Theme</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Equipment</a></li>
                    <li><a href="#">Best</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Apparel</a></li>
                    <li><a href="#">Super</a></li>
                    <li><a href="#">Duper</a></li>
                    <li><a href="#">Theme</a></li>
                    <li><a href="#">Responsive</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Equipment</a></li>
                </ul>
            </div>
        </div>
        <div class="new-product">
            <div id="cbp-vm" class="cbp-vm-switcher cbp-vm-view-grid">
                <div class="cbp-vm-options">
                    <a href="#" class="cbp-vm-icon cbp-vm-grid" data-view="cbp-vm-view-grid" title="grid"></a>
                    <a href="#" class="cbp-vm-icon cbp-vm-list" data-view="cbp-vm-view-list" title="list"></a>
                </div>
                <div class="pages">
                    <div class="limiter visible-desktop">
                        <label>Show</label>
                        <select>
                            <option value="" selected="selected">9</option>
                            <option value="">15</option>
                            <option value="">30</option>
                        </select> per page
                    </div>
                </div>
                <div class="clearfix"></div>

                <ul>
                    <?php $__currentLoopData = $trips; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tripuser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li>
                        <a class="cbp-vm-image" href="single.html">
                            <div class="simpleCart_shelfItem">
                                <div class="view view-first">
                                    <div class="inner_content clearfix">
                                        <div class="product_image">
                                            <img src="http://placehold.it/500x400" class="img-responsive" alt="" />
                                            <div class="mask">
                                                <div class="info">Quick View</div>
                                            </div>
                                            <div class="product_container">
                                                <?php
            $tripagent = DB::table('travelagency')->where('id', $tripuser->travelagency_id)->first();
            
            $tripround = DB::table('triprounds')->where('trip_id', $tripuser->id)->get();
            ?>
                                                    <div class="cart-left">
                                                        <p class="title"><?php echo e($tripuser->trips_name); ?> </p>
                                                        <p>จังหวัด <?php echo e($tripuser->trip_province); ?> | โดย บริษัท <?php echo e($tripagent->agency_name_en); ?></p><br>
                                                    </div>
                                                    <div class="pricey"><span class="item_price">$259.00</span></div>
                                                    <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </a>
                        <div class="cbp-vm-details">
                            <p><?php echo e($tripuser->trip_description); ?></p>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </li>

                </ul>
                </div>
                <script src="js/search_tripUser/cbpViewModeSwitch.js" type="text/javascript"></script>
                <script src="js/search_tripUser/classie.js" type="text/javascript"></script>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headindex', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>