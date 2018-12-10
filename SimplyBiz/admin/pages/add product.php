
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/favicon.png"/>
    <title>SmartBuy | Admin</title>

     <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
   
    <div class="container body">
      <div class="main_container">
       
        <!-- /top navigation -->
<?php require 'header.php';?>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add Product <small>Adding products from Amazon / Flipkart</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                  
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
					
					<br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="add products.php" method="post" enctype="multipart/form-data">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Main Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						 
                          <select class="form-control" id="cat_title1" name="cat_title1" required>
						    <option value="">&#8212; Please Select &#8212;</option>
                            <option>Electronics</option>
                            <option>Men</option>
                            <option>Women</option>
                            <option>Kids</option>
                            <option>Appliances</option>
                          </select>
                       
                         
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Sub Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						   <select class="form-control" id="cat_title2" name="cat_title2" required>
                            
                          </select>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Product Name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="productname" class="form-control col-md-7 col-xs-12" type="text" name="productname"  required="required">
                        </div>
                      </div>
					  <script>
					  function selBrand(dropdown)
					  {
						  document.getElementById('brandname').value= dropdown;
					  }
					   
					  </script>
					   <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Brand Name<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="brandname" class="form-control col-md-7 col-xs-12" type="text" name="brandname"  required="required">
						  <select class="form-control" name="selbrand" size=10 onchange="selBrand(this.value)">
								<?php
								include("../db_conection.php");
								$select="select brandname from brands order by brandname ASC";
								$run_query=mysqli_query($conn,$select);
								
								while($row = mysqli_fetch_array($run_query))
								{
									echo '<option value="'.$row['brandname'].'">'.$row['brandname'].'</option>';
								}
							?>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Price<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <input type="text" id="price" name="price" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="description" name="description" required="required" class="form-control col-md-7 col-xs-12" rows="5"></textarea>
						  
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Additional Information 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea id="additionalinfo" name="additionalinfo" class="form-control col-md-7 col-xs-12" rows="5"></textarea>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Buy Link <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="buylink" name="buylink" class="form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					   <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Searching Tags <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="tags_1" name="tags" type="text" class="tags form-control" />
						  <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                        </div>
                      </div>
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Photos <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="img1" name="img1" type="file" class="form-control" />
						  <input id="img2" name="img2" type="file" class="form-control" />
						  <input id="img3" name="img3" type="file" class="form-control" />
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
		  
		 
         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <?php require 'footer.php';?>
        <!-- /footer content -->
      </div>
    </div>
	
	

 <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
	<script type="text/javascript" src="js/select.js"></script>
	
<script language="javascript" type="text/javascript">  


var Electronics = [
	{display: "Mobiles", value: "Mobiles" }, 
	{display: "Mobile Accessories", value: "Mobile Accessories" }, 
	{display: "Computers", value: "Computers" },
	{display: "Laptops", value: "Laptops" },
	{display: "Computers Accessories", value: "Computers Accessories" },
	{display: "TVs", value: "TVs" },
	{display: "Speakers", value: "Speakers" },
	{display: "Headphones", value: "Headphones" },
	{display: "Camera", value: "Camera" }];
	
var Men = [
	{display: "Clothing", value: "Men Clothing" }, 
	{display: "T-Shirt", value: "T-Shirt" }, 
	{display: "Shirts", value: "Shirts" },
	{display: "Jeans", value: "Jeans" },
	{display: "Watches", value: "Men Watches" },
	{display: "Sunglasses", value: "Men Sunglasses" },
	{display: "Shoes", value: "Men Shoes" },
	{display: "Wallets", value: "Men Wallets" }];
	
var Women = [
	{display: "Traditional Wear", value: "Women Traditional" }, 
	{display: "Western Wear", value: "Women Western" },
	{display: "Beauty", value: "Women Beauty" },
	{display: "Watches", value: "Women Watches" },
	{display: "Sunglasses", value: "Women Sunglasses" },
	{display: "Shoes", value: "Women Shoes" },
	{display: "Jewels", value: "Jewels" },
	{display: "Bags", value: "Bags" }];
	
var Kids = [
	{display: "Clothing", value: "Kids Clothing" }, 
	{display: "Toys", value: "Toys" }, 
	{display: "Video Games", value: "Video Games" },
	{display: "Watches", value: "Kids Watches" },
	{display: "School Bags", value: "School Bags" },];

var Appliances = [
	{display: "Kitchen", value: "Kitchen" }, 
	{display: "Furniture", value: "Furniture" }, 
	{display: "Refrigerator", value: "Refrigerator" },
	{display: "Washing Machine", value: "Washing Machine" },
	{display: "Air Conditioner", value: "Air Conditioner" },
	{display: "Others", value: "Appliances" }];

//If parent option is changed
$("#cat_title1").change(function() {
		var parent = $(this).val(); //get option value from parent 
		
		switch(parent){ //using switch compare selected option and populate child
			  case 'Electronics':
			 	list(Electronics);
				break;
			  case 'Men':
			 	list(Men);
				break;				
			  case 'Women':
			 	list(Women);
				break;
				case 'Kids':
			 	list(Kids);
				break;	
				case 'Appliances':
			 	list(Appliances);
				break;					
			default: //default child option is blank
				$("#cat_title2").html('');	 
				break;
		   }
});

//function to populate child select box
function list(array_list)
{
	$("#cat_title2").html(""); //reset child options
	$(array_list).each(function (i) { //populate child options 
		$("#cat_title2").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
	});
}
</script>
	
  </body>
</html>
