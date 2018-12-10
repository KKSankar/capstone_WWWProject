<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Detail- SmartBuy</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
	.block2-txt.p-t-20 {
    text-align: center;
}
.logo img {
    max-height: 55px;
}
	</style>
</head>
<body class="animsition">

	<!-- Header -->
	<?php require 'header.php';
	
	if(isset($_GET['productid']) && !empty($_GET['productid']))
	{
		include("db_conection.php");
		$productid=$_GET['productid'];
		$select="SELECT * FROM products WHERE productid='".$productid."'";
		$run_query=mysqli_query($conn,$select);
		if(mysqli_num_rows($run_query)>0)
		{
		while($rows = mysqli_fetch_array($run_query))
			{
				extract($rows);
			}
		}
	}
	?>

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="<?php echo strtolower($cat_title1).".php"; ?>" class="s-text16">
			<?php echo $cat_title1; ?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="<?php echo strtolower($cat_title2).".php"; ?>" class="s-text16">
			<?php echo $cat_title2; ?>
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			<?php echo $productname; ?>
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="images/products/<?php echo $img1; ?>">
							<div class="wrap-pic-w">
								<img src="images/products/<?php echo $img1?>" alt="IMG-PRODUCT">
							</div>
						</div>
						<?php 
							if(!empty($img2))
							{
								echo "
						<div class=\"item-slick3\" data-thumb=\"images/products/". $img2 ."\">
							<div class=\"wrap-pic-w\">
								<img src=\"images/products/". $img2 ."\" alt=\"IMG-PRODUCT\">
							</div>
						</div>";
							
							} 
							if(!empty($img3))
							{
								echo "
						<div class=\"item-slick3\" data-thumb=\"images/products/". $img3 ."\">
							<div class=\"wrap-pic-w\">
								<img src=\"images/products/". $img3 ."\" alt=\"IMG-PRODUCT\">
							</div>
						</div>";
							
						
							}
						?>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name m-text16 p-b-13">
					<?php echo $productname; ?>
				</h4>

				<span class="m-text17">
					<li class="fa fa-dollar"> <?php echo $price; ?></li>
				</span>

				

				<!--  -->
				<div class="p-t-33 p-b-60">
					

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							
							<div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">
								<!-- Button -->
								<a href="<?php echo $buylink; ?>" target="_blank">
								<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
									Buy
								</button>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="p-b-45">
					
					<span class="s-text8">Categories: <?php echo $tags;?></span>
				</div>

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo $description; ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Additional information
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							<?php echo $additionalinfo; ?>
						</p>
					</div>
				</div>

				<div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Reviews (1)
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Excellent Product
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Products
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					<?php
						include("db_conection.php");
						$productid=$_GET['productid'];
						$select="SELECT * FROM products WHERE brand='$brand' OR cat_title2='$cat_title2' LIMIT 8";
						//SELECT p.*,COUNT(*) AS matchedTags FROM products p
            //INNER JOIN tags pt ON pt.productid = p.productid
           // WHERE pt.id IN (SELECT id FROM tags WHERE productid ='2')
            //GROUP BY p.productid
            //HAVING COUNT(*) > 1 limit 8
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
								<img src="images/products/'.$img1.'" alt="IMG-PRODUCT">

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
									<li class="fa fa-dollar">
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


	<!-- Footer -->
	<?php require 'footer.php';?>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>


<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
