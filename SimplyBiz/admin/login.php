<?php
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}
if ( is_session_started() === FALSE ) 
	session_start();

if(isset($_SESSION['simplybizadmin']))
{

	session_destroy();

}
//query with case sensitivity using BINARY key word
include("db_conection.php");

$password=md5($_POST['password']);
$username=$_POST['username'];

//query with case sensitivity using BINARY key word
$password=md5($_POST['password']);
$login = "SELECT * FROM admin WHERE (BINARY username = BINARY '" .($username) . "') and (BINARY password = BINARY '" .($password) . "' and del_flg!='1')";
//$run_query=mysql_fetch_array($login); 
$run_query=mysqli_query($conn,$login)or die("error in $login == ----> ".mysql_error()); 
if(mysqli_num_rows($run_query)>0){

$_SESSION['simplybizadmin'] = $_POST['username'];
header ("location: pages/");

}

else {

echo "<script>alert('Wrong User Name or Password. Try Again.')</script>";
echo "<script>window.open('index.php','_self')</script>";

}
?>
