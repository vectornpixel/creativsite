<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
        <link rel="stylesheet" href="<?php echo(CSS.'/bootstrap.css'); ?>">
        <link rel="stylesheet" href="<?php echo(CSS.'/styles.css'); ?>">
        <link rel="stylesheet" href="<?php echo(CSS.'/bootstrap-responsive.css'); ?>">
        
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
           <div class="pull-left">
               <img src="<?php echo (URL.'images/nav-location.jpg');?>">
      
            </div>
          <div class="pull-right">
              <?php if(isset($records)) : foreach($records as $row) : ?>
              <a href="<?php echo (URL.'site/profile/'. $row->username); ?>"><img src="<?php echo (URL.'images/nav-user.jpg');?>"></a>
              <a href="<?php echo (URL.'site/edit/'. $row->username); ?>"><img src="<?php echo (URL.'images/nav-settings.jpg');?>">
              <?php endforeach; ?>
                <?php else : ?>
                
                <?php endif; ?>
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