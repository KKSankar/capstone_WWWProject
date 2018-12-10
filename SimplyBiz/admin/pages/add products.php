
<?php
 include("../db_conection.php");


$cat_title1 = $_POST['cat_title1'];
$cat_title2 = $_POST['cat_title2'];
$productname=$_POST['productname'];
$brandname=$_POST['brandname'];
$price = $_POST['price'];
$description = $_POST['description'];
$additinfo = $_POST['additionalinfo'];
$link = $_POST['buylink'];
$tags = $_POST['tags'];


function GetImageExtension($imagetype)

     {

       if(empty($imagetype)) return false;

       switch($imagetype)

       {  case 'image/bmp': return '.bmp';  
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }     

if (!empty($_FILES["img1"]["name"])) {

    $file_name=$_FILES["img1"]["name"];

    $temp_name=$_FILES["img1"]["tmp_name"];

    $imgtype=$_FILES["img1"]["type"];

    $ext= GetImageExtension($imgtype);

  	$imagename=date("d-m-Y")."-".time()."1".$ext;
	$img1= $imagename;

    $target_path = "../../images/products/".$imagename; 


if(!move_uploaded_file($temp_name, $target_path)) 
{
	
echo "<script>alert('The image cannot be uploaded')</script>";	

}

}
else
{
	echo "<script>alert('You didnot select any image. Please select atleast one image to upload.')</script>";	
	echo "<script>window.open('javascript:history.go(-1)','_self')</script>";
	exit();
	
}

if (!empty($_FILES["img2"]["name"])) {

    $file_name=$_FILES["img2"]["name"];

    $temp_name=$_FILES["img2"]["tmp_name"];

    $imgtype=$_FILES["img2"]["type"];

    $ext= GetImageExtension($imgtype);

  $imagename=date("d-m-Y")."-".time()."2".$ext;
	
	$img2= $imagename;

    $target_path = "../../images/products/".$imagename; 


if(!move_uploaded_file($temp_name, $target_path)) 
{
	
echo "<script>alert('The image cannot be uploaded')</script>";	
$img2="";

}


}
else
{
$img2="";	
}



if (!empty($_FILES["img3"]["name"])) {

    $file_name=$_FILES["img3"]["name"];

    $temp_name=$_FILES["img3"]["tmp_name"];

    $imgtype=$_FILES["img3"]["type"];

    $ext= GetImageExtension($imgtype);

   $imagename=date("d-m-Y")."-".time()."3".$ext;
	
	$img3= $imagename;

    $target_path = "../../images/products/".$imagename; 


if(!move_uploaded_file($temp_name, $target_path)) 
{
	
echo "<script>alert('The image cannot be uploaded')</script>";
$img3="";	

}

}
else
{
$img3="";	
}



$save="insert into products (cat_title1, cat_title2 ,productname,brand,price,description,additionalinfo,buylink,tags,img1,img2,img3,entrydate) VALUE ('$cat_title1','$cat_title2','$productname','$brandname','$price','$description','$additinfo','$link','$tags','$img1','$img2','$img3',CURDATE())";
mysqli_query($conn,$save);


$keywords = preg_split("/,/", "$tags");

$select="SELECT max(productid) as productid FROM products";

$run_query=mysqli_query($conn,$select);
if(mysqli_num_rows($run_query)>0)
{
while($rows = mysqli_fetch_array($run_query))
	{
		extract($rows);
	}
}
$size=sizeof($keywords);
for($i=0;$i<$size;$i++)
{
$save="INSERT INTO tags (productid,productname,keyword) VALUES('$productid','$productname','$keywords[$i]')";

mysqli_query($conn,$save);
}
echo "<script>alert('The product is successfully added')</script>";				
echo "<script>window.open('add product.php','_self')</script>";


$conn->close();
?>

