
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
                <h2><?php echo $row->firstname; ?> <?php echo $row->lastname; ?></h2>
                <h5><?php echo $row->location; ?></h3>
                <a href="#"><?php echo $row->website; ?></a>
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
 
          <h2>Project Management</h2>
          <hr>
          <h4>PROJECTS APPLIED FOR</h4>
          <div class="row">
        <div class="span7">
            <ul class="job2">
                <li class="job-views">
               
                    <h4>2/10</h4>
                </li>
                <li class="job-info2">
                    <h4>Wordpress Design</h4>
                    <p>In need of Wordpress Design for bakery.</p>
                </li>
                <li class="job-location"> 
              
                    <span class="removebtn"><a href="#">REMOVE</a></span>
                  
                </li>
            </ul>
             
        </div>
        <div class="span7">
            <ul class="job2">
                <li class="job-views">
               
                    <h4>2/10</h4>
                </li>
                <li class="job-info2">
                    <h4>Wordpress Design</h4>
                    <p>In need of Wordpress Design for bakery.</p>
                </li>
                <li class="job-location"> 
              
                    <span class="removebtn"><a href="#">REMOVE</a></span>
                  
                </li>
            </ul>
             
        </div>
          </div>
   
      
    
          <h2>Upload Designs</h2>
          <hr>
              <form>
                <fieldset>
                <label>Design Type</label>
                <select>
                    <option>Graphic Designer</option>
                    <option>Web Designer</option>
                </select>
                <label>Upload Files</label>
                <div class="input-append">
                <input class="span2" id="appendedInputButtons" type="text">
                <button class="btn" type="button">Browse</button>
                <button class="btn" type="button">Upload</button>
                </div>
                <br>
                <button type="submit" class="btn">Submit</button>
                </fieldset>
               </form>
          
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
          
       
   <div class="clearfix"></div>
      

       <h2>Account Information</h2>
       <hr>
       <div class="span7">
          <?php echo form_open('profile/update')?>
                <fieldset>
                 <label>First Name</label>
                 <input type="text" placeholder="type name" name="firstname" id="firstname">
                 <label>Last Name</label>
                 <input type="text" placeholder="type name" name="lastname" id="lastname">
                 <label>Email</label>
                 <input type="text" placeholder="email address" name="email" id="email">
                 
                <label>Design Experience</label>
                <select name="industry" id="industry">
                    <option>Graphic Designer</option>
                    <option>Web Designer</option>
                </select>
                <label>City</label>
                <input type="text" placeholder="" name="location" id="location">
                <label>State</label>
                <select name="state" id="state">
                    <option>Michigan</option>
                </select>
                <label>Web Site</label>
                 <input type="text" placeholder="" name="website" id="website">
                 <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                Open for projects
                </label>
                <label class="radio">
                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                Closed for projects ( businesses cannot contact you )
                </label>
                <label>Designer Summary</label>
                <textarea rows="3" name="bio" id="bio"></textarea>
                <br>
                <button type="submit" class="btn">Submit</button>
                </fieldset>
             <?php echo form_close();?>
       </div>
  <div class="clearfix"></div>
       <h2>Change Password</h2>
       <hr>
       <div class="span7">
           <form>
                <fieldset>
                 <label>New Password</label>
                 <input type="text" placeholder="">
                 <label>Confirm Password</label>
                 <input type="text" placeholder="">
                <br>
                <button type="submit" class="btn">Submit</button>
                </fieldset>
               </form>
       </div>
 

    </div>