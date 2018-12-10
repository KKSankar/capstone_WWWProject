<html>
<head>
<title>Brand Entry SmartBuy</title>
</head>
<body>

<div class="branddiv">
<form method="post">
<input type="text" placeholder="Enter Brand Name" name ="brand" id ="brand" required />
<input type="Submit" value="Save" name="ok" id="ok" />
</form>
</br>
 <select class="form-control" name="selbrand" size=10 onchange="selBrand(this.value)">
								<?php
								include("db_conection.php");
								$select="select brandname from brands order by brandname ASC";
								$run_query=mysqli_query($conn,$select);
								
								while($row = mysqli_fetch_array($run_query))
								{
									echo '<option value="'.$row['brandname'].'">'.$row['brandname'].'</option>';
								}
							?>
                          </select>
</div>

</body>
</html>

<?php

if(isset($_POST['brand']) && !empty($_POST['brand']))
{
	include("db_conection.php");
	$brand=$_POST['brand'];
	$qry="INSERT INTO brands(brandname) values('$brand')";
	mysqli_query($conn,$qry);
}
?>