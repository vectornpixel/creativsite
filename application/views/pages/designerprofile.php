<div class="container">
<div class="break"></div>
        <div class="userinfo">
            <div class="usercontact">
                <div class="userphoto">
                    <img src="<?php echo (URL.'images/user-photo.jpg');?>">
                 </div>
                <div class="usericons"> 
                    <h4>OPEN</h4>
                    <div class="icons2">
                   <h4><img src="<?php echo (URL.'images/icon-mail.png');?>"></h4>
                   <h4><img src="<?php echo (URL.'images/icon-views2.png');?>"> 21</h4>

                    
                    </div>
                 </div>
            </div>
            <div class="userbio">
               <?php if(isset($records)) : foreach($records as $row) : ?>
                <h2><?php echo anchor('site/edit/'. $row->username, $row->firstname); $row->firstname; ?> <?php echo $row->lastname; ?></h2>
                <h5><?php echo $row->location; ?></h3>
                <?php echo anchor($row->website);  $row->website; ?>
                <p><b>Experience: </b><?php echo $row->industry; ?></p>
                <p><?php echo $row->bio; ?></p>
            
                
                <?php endforeach; ?>
                <?php else : ?>
                <h2> No records </h2>
                <?php endif; ?>
 
            </div>
        </div>
        <div class="clearfix"></div>
      <!-- Example row of columns -->
      <hr>
            <ul class="category center2">
                
             
              <li class="mainbtn"><a href="#">Portfolio</a></li>
              <li class="mainbtn"><a href="#">Projects</a></li>

  
            </ul>
   <div class="clearfix"></div>
      
      <div class="row offsetbottom">
        <div class="span4">
          <div class="item">
            <div class="thumb">
                <img src="<?php echo (URL.'images/holder-item.jpg');?>">
            <div class="info">
                <h3>Logo Design</h3>
            </div>
            </div>
    
       </div>
        </div>
          <div class="span4">
          <div class="item">
        <div class="thumb">
            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
        <div class="info">
            <h3>Logo Design</h3>
        </div>
        </div>
   
       </div>
        </div>
          <div class="span4">
          <div class="item">
        <div class="thumb">
            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
        <div class="info">
            <h3>Logo Design</h3>
        </div>
        </div>
   
       </div>
        </div>
          
          <div class="span4">
          <div class="item">
        <div class="thumb">
            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
        <div class="info">
            <h3>Logo Design</h3>
        </div>
        </div>
   
       </div>
        </div>
        
      </div>
      
      
      <div class="row">
        <div class="span4">
          <div class="item">
            <div class="thumb">
                <img src="<?php echo (URL.'images/holder-item.jpg');?>">
            <div class="info">
                <h3>Logo Design</h3>
            </div>
            </div>
    
       </div>
        </div>
          <div class="span4">
          <div class="item">
        <div class="thumb">
            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
        <div class="info">
            <h3>Logo Design</h3>
        </div>
        </div>
   
       </div>
        </div>
          <div class="span4">
          <div class="item">
        <div class="thumb">
            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
        <div class="info">
            <h3>Logo Design</h3>
        </div>
        </div>
    
       </div>
        </div>
          
          <div class="span4">
          <div class="item">
        <div class="thumb">
            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
        <div class="info">
            <h3>Logo Design</h3>
        </div>
        </div>
      
       </div>
        </div>
          
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div>