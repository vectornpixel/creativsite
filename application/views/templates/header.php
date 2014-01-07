<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
        <link rel="stylesheet" href="<?php echo(CSS.'/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo(CSS.'/styles.css'); ?>">
        <link rel="stylesheet" href="<?php echo(CSS.'/bootstrap-responsive.css'); ?>">
        <script type="text/javascript">
            function removeItems(){
                
            }
            function checkPass()
            {
            //Store the password field objects into variables ...
            var pass1 = document.getElementById('password');
            var pass2 = document.getElementById('password2');
            //Store the Confimation Message Object ...
            var message = document.getElementById('confirmMessage');
            //Set the colors we will be using ...
            var goodColor = "#66cc66";
            var badColor = "#ff6666";
            //Compare the values in the password field
            //and the confirmation field
            if(pass1.value == pass2.value){
                //The passwords match.
                //Set the color to the good color and inform
                //the user that they have entered the correct password
                pass2.style.backgroundColor = goodColor;
                message.style.color = goodColor;
                message.innerHTML = "Passwords Match!"
            }else{
                //The passwords do not match.
                //Set the color to the bad color and
                //notify the user.
                pass2.style.backgroundColor = badColor;
                message.style.color = badColor;
                message.innerHTML = "Passwords Do Not Match!"
            }
            }
        </script> 
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
           <div class="pull-left">
               <img src="<?php echo (URL.'images/nav-location.jpg');?>">
      
            </div>
          <div class="">
              <?php if(isset($records)) { 
                  foreach($records as $row) { ?>
 
              <li class="dropdown pull-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo (URL.'images/nav-settings.jpg');?>"></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo (URL.'site/gallery/'. $row->username); ?>">Edit Portfolio</a></li>
                    <li><a href="#">View Projects</a></li>
                    <li class="divider"></li>
                    <li class="nav-header">Settings</li>
                    <li><a href="<?php echo (URL.'site/edit/'. $row->username); ?>">Account Settings</a></li>
                    <li><a href="<?php echo (URL.'login/logout/')?>">Log Out</a></li>
                  </ul>
                </li>

                
                <li class="dropdown pull-right">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo (URL.'images/nav-user.jpg');?>"></a>
                  <ul class="dropdown-menu">
                    <li><a href="<?php echo (URL.'site/profile/'. $row->username); ?>">View Profile</a></li>
                    <li><a href="#">Messages</a></li>
                  </ul>
              </li> 
                  <?php } ?>
              <?php }else{  ?>
                
              <?php }; ?>
            </div>
        <div class="container">
         
           
          <a class="brand" href="#">creativconnect</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo (URL.'site/designers');?>">Designers</a></li>
              <li><a href="<?php echo (URL.'site/business');?>">Businesses</a></li>
              <li><a href="<?php echo (URL.'site/jobs');?>">Browse Jobs</a></li>
            </ul>
            
            
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="break">
    </div>