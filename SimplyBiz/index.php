<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home - SmartBuy</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<!--<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

	<style>
	
	.logo img {
    max-height: 55px;
}
.block2-txt.p-t-20 {
    text-align: center;
	  
}
}
	</style>
	<script>
	//document.addEventListener('contextmenu', event => event.preventDefault());
	</script>
</head>
<body class="animsition">

	<!-- Header -->
	<?php require 'header.php';?>
	<!-- Header -->
	<!-- Slide1 -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1 item1-slick1" style="background-image: url(images/slider/slide-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-0 p-r-0 p-t-0 p-b-0">
					<!--<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown" style="color:#000;">
							Mobiles 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp"style="color:#000;">
							New arrivals
						</h2>
						-->

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button 
							<a href="mobiles.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>-->
						</div>
					</div>
				</div>

				<!--<div class="item-slick1 item2-slick1" style="background-image: url(images/slider/slide-01.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
					

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							 Button
							<a href="clothing.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div> -->

				<div class="item-slick1 item3-slick1" style="background-image: url(images/slider/slide-02.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-0 p-r-0 p-t-0 p-b-0">
					

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button 
							<a href="footwears.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a> -->
						</div>
					</div>
				</div>
				<div class="item-slick1 item3-slick1" style="background-image: url(images/slider/slide-05.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-0 p-r-0 p-t-0 p-b-0">
					

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button 
							<a href="watches.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a> -->
						</div>
					</div>
				</div>
				<div class="item-slick1 item3-slick1" style="background-image: url(images/slider/slide-03.jpg);">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-0 p-r-0 p-t-0 p-b-0">
						

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button
							<a href="electronics.php" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a> -->
						</div>
					</div>
				</div>
				

			</div>
		</div>
	</section>
	
    <!-- New Product -->
	
	<section class="newproduct bgwhite p-t-45 p-b-25">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Featured Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<?php
						include("db_conection.php");
						
						$select="SELECT * FROM products ORDER by productid DESC LIMIT 8";
						
						$run_query=mysqli_query($conn,$select);
						if(mysqli_num_rows($run_query)>0)
						{
						while($rows = mysqli_fetch_array($run_query))
							{
								extract($rows);
								echo '<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative">
								<img src="images/products/'.$img1.'" alt="IMG-PRODUCT" width=300 height=250>

								<div class="block2-overlay trans-0-4">
									
									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button -->
										<a href="product-detail.php?productid='.$productid.'">
										<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											View
										</button>
										</a>
									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.php?productid='.$productid.'" class="block2-name dis-block s-text3 p-b-5">
									'.$productname.'
								</a>

								<span class="block2-price m-text6 p-r-5 ">
									<li class="fa fa-rupee">
									'.$price.'
									</li>
								</span>
							</div>
						</div>
					</div>';
								
							}
						}
						
					?>
				</div>
			</div>

		</div>
	</section>
	<hr />
	<!-- Banner -->
	<section class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-4 col-lg-3">
					
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/sun.jpg" alt="IMG-GLASS" width= 50 height=300>

						
					</div>
					<a href="men-sunglasses.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Sunglasses
							</a>
				</div>
                   
				<div class="col-sm-12 col-md-4 col-lg-3">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/watch.jpg" alt="IMG-WATCH" width=50 height=300>

						
					</div>
					<a href="men-watches.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Watches
							</a>
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/footwear.jpg" alt="IMG-FOOTWEAR" width=50 height=300>

						
					</div>
					<a href="women-shoes.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Footwear
							</a>
				</div>
				
				<div class="col-sm-12 col-md-4 col-lg-3 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/kitchen.jpg" alt="IMG-KITCHEN" width=50 height=300>

						
					</div>
						<a href="kitchen.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Kitchen
							</a>
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/laptops.jpg" alt="IMG-LAPTOP" width=50 height=300>

						
					</div>
					<a href="laptops.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Laptop
							</a>
				</div>

				<div class="col-sm-12 col-md-4 col-lg-3 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/bag.jpg" alt="IMG-BAGS" width=50 height=300>

						
					</div>
					<a href="women-bags.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Bags
							</a>
					<!-- block2 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="images/banner/mobile.jpg" alt="IMG-GLASS" width=50  height=300>

						
					</div>
					<a href="mobiles.php" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Mobiles
							</a>
				</div>
			</div>
		</div>
	</section>

	

	<!-- Banner2 -->
	<section class="banner2 bg5 p-t-55 p-b-55">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="images/banner/women.jpg" alt="IMG-BANNER">

						
				<div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
					<div class="hov-img-zoom pos-relative">
						<img src="images/banner/me.jpg" alt="IMG-BANNER">

						<div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
							<span class="m-text9 p-t-45 fs-20-sm">
								Men Clothing
							</span>

							<h3 class="l-text1 fs-35-sm">
								Lookbook
							</h3>

							<a href="men-clothing.php" class="s-text4 hov2 p-t-20 ">
								View Collection
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65" style="display:none">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Our Blog
				</h3>
			</div>

			<div class="row">
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									Black Friday Guide: Best Sales & Discount Codes
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

							<p class="s-text8 p-t-16">
								Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-02.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									The White Sneakers Nearly Every Fashion Girls Own
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

							<p class="s-text8 p-t-16">
								Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="images/blog-03.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									New York SS 2018 Street Style: Annina Mislin
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
							<span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

							<p class="s-text8 p-t-16">
								Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	


	<!-- Footer -->
	<?php require 'footer.php';?>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>


<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
