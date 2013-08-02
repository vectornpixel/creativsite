
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
 
          <h2>Upload Designs</h2>
          <hr>
              

            <div id="upload">
                <label>Category</label>
                
                <?php
                // loads gallery controller
                echo form_open_multipart('site/gallery');?>
                <select name="category" id="category">
                    <option>Logo Design</option>
                    <option>Web Design</option>
                </select>
                <br>
                <?php
                
                echo form_upload('userfile');
                echo form_submit('upload', 'Upload');
                echo form_close();
                ?>
            </div>
          
           <div class="row offsetbottom">
               
                <?php if(isset($images) && count($images)):
                foreach($images as $image): ?>  
                 <div class="span4">
                    <div class="item">
                        <div class="thumb">
                            <a href="<?php echo $image['url']; ?>">
                            <img src="<?php echo $image['thumb_url'];?>">
                            </a>
                            <div class="info">
                            <h3>Category Name</h3>
                        </div>
                        </div>
                    </div>
                </div>
               <?php endforeach; else: ;?>
                <img src="<?php echo (URL.'images/holder-item.jpg');?>">
                <div id="blank_gallery">Please Upload an Image</div>
                <div class="info">
                <h3>No Title Added</h3>
                 </div>
                <?php endif; ?>
               
        
      </div>
          
       
   <div class="clearfix"></div>

    </div>