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
if(!isset($_SESSION['simplybizadmin']) && empty($_SESSION['simplybizadmin']))
{
  echo "<script>window.open('../index.php','_self')</script>";
  
}
?>
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>SMARTBUY</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/image.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>SmartBuy</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-home"></i> Home </a>
                  
                  </li>
                  <li><a><i class="fa fa-edit"></i> Products <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add product.php">Add Product</a></li>
                      <li><a href="manage products.html">Manage Products</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-play-circle-o"></i> Blog <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="add post.php">Add Post</a></li>
                      <li><a href="manage post.php">Manage Post</a></li>
                    </ul>
                  </li>
				   <li><a><i class="fa fa-envelope"></i> Newsletter <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="send mails.php">Send Mails</a></li>
                      <li><a href="manage subscribers.php">Manage Subscribers</a></li>
                    </ul>
                  </li>
				  <li><a href="greeting text.php"><i class="fa fa-thumbs-o-up"></i> Greeting Text</a>
                 
                  </li>
                
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Add Products" href="add product.php">
                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Help" href="help.php">
                <span class="fa fa-info" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Profile" href="profile.php">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/image.png" alt="">Karthika Kumar
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="profile.php"> Profile</a></li>
                   
                    <li><a href="help.php">Help</a></li>
                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
				<li role="presentation" >
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                   <i class="fa fa-bell icon-animated-bell"> <label id="timer"  class="timer"></label></i>
                    
                  </a>
				</li>

                <li role="presentation" >
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-calendar"> <?php echo date('d-m-Y');?></i>
                    
                  </a>
				  </li>
				  
				
                 <Script>
				setInterval(function() {
					var currentTime = new Date ( );    
					var currentHours = currentTime.getHours ( );   
					var currentMinutes = currentTime.getMinutes ( );   
					var currentSeconds = currentTime.getSeconds ( );
					currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
					currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
					var timeOfDay = ( currentHours < 12 ) ? "AM" : "PM";    
					currentHours = ( currentHours > 12 ) ? currentHours - 12 : currentHours;    
					currentHours = ( currentHours == 0 ) ? 12 : currentHours;    
					var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + timeOfDay;
					 document.getElementById("timer").innerHTML = currentTimeString;
					
				}, 1000);
				</script>
              </ul>
            </nav>
          </div>
        </div>
	
