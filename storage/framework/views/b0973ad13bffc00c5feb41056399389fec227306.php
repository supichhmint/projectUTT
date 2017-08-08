 
<?php $__env->startSection('title', 'profile'); ?> 
<?php $__env->startSection('content'); ?>


<link href="css/bootstrap3.min.css" rel="stylesheet" type="text/css" >
<link href="css/thaitravelcenter.css" rel="stylesheet" type="text/css" >
	<link href="css/member-style.css" type="text/css" rel="stylesheet">
	<link href="css/blog.min.css" rel="stylesheet" type="text/css">
	<link href="css/profile.min.css" rel="stylesheet" type="text/css">
	<link href="css/blogttc.css" rel="stylesheet" type="text/css">
	<style>
		.ttc-promotion .box img {
			height: 179px;
		}
	</style>
	<div class="container">
	<div class="blog-page blog-content-1">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<div class="col-xs-12">
						<div class="blog-banner blog-container" style="background-image:url('img/1.jpg')">
							<div class="blog-banner-avatar">
								<a href="javascript:;">
								<img src="https://scontent.xx.fbcdn.net/v/t1.0-1/s200x200/16508263_1660676713946062_4952681256780516861_n.jpg?oh=409dd134e21cea115ec4bee48f6f2aea&amp;oe=5A0DBEE6" alt="avatar">                            </a>
							</div>
							<h2 class="blog-title blog-banner-title">
								ยินดีต้อนรับ คุณSupichaya Kantawong <a href="/setting" class="btn btn-no-bg tooltips" title="แก้ไขการตั้งค่าของท่าน"><i class="fa fa-gear fa-2x font-yellow" style="margin-left: -5px;text-shadow: 2px 2px 1px #444;"></i></a>
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-9">
						<h1>กิจกรรมเมื่อเร็วๆนี้</h1>
						<div class="travelo-box">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h4>เพิ่งไปล่าสุด</h4>
									<div class="image-box style14">
										<article class="box">
											<div class="details">
												<h5 class="box-title"><a href="#"> ไม่มีรายการ </a></h5>
												<label class="price-wrapper"><span class="price-per-unit">  </span></label>
											</div>
										</article>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6">
									<h4>กำลังไปเร็วๆนี้</h4>
									<div class="image-box style14">
										<article class="box">
											<div class="details">
												<h5 class="box-title"><a href="#"> ไม่มีรายการ </a></h5>
												<label class="price-wrapper"><span class="price-per-unit">  </span></label>
											</div>
										</article>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="sidebar col-md-3">
						<div class="travelo-box book-with-us-box">
							<h4>ค้นหาการเดินทางครั้งใหม่</h4>
							<ul>
								<li>
									<i class="soap-icon-hotel-1 circle blue-color"></i>
									<h5 class="title"><a href="/hotel" target="_blank">
									ค้นหาโรงแรมที่ดีที่สุด</a></h5>
								</li>
								<li>
									<i class="icon soap-icon-plane-right takeoff-effect yellow-color circle"></i>
									<h5 class="title"><a href="/restuarant" target="_blank">
									ค้นหาร้านอาหารสุดคุ้ม</a></h5>
								</li>
								<li>
									<i class="soap-icon-places circle red-color"></i>
									<h5 class="title"><a href="/trips" target="_blank">
									ทริปยอดนิยม</a></h5>
								</li>
								<li>
									<i class="soap-icon-beach circle green-color"></i>
									<h5 class="title"><a href="/thailandtrips" target="_blank">
									ทริปในประเทศสุดชิล</a></h5>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headprofile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>