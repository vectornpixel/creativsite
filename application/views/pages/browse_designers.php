 <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
     

      <!-- Example row of columns -->
            <header class="title">
                 <h2><b>Designers</b></h2>
            </header>
      
            <div class="hero-unit">
                <h2>Your Designers & Developers. Reviewed & Approved</h2>
            </div>
            <h4>TOP DESIGN CATEGORIES</h4>
            <ul class="category center2">
                
             
              <li class="mainbtn"><a href="#">WEB DESIGN</a></li>
              <li class="mainbtn"><a href="#about">GRAPHIC DESIGN</a></li>
              <li class="mainbtn"><a href="#contact">LOGO DESIGN</a></li>
              <li class="mainbtn"><a href="#">COVER DESIGN</a></li>
              <li class="mainbtn"><a href="#about">BRAND IDENTITY</a></li>
  
            </ul>
  
      
      <div class="row offsetbottom">
          
          
           <?php if(isset($records)) : foreach($records as $row) : ?> 
                 <div class="span4">
                    <div class="item">
                        <div class="thumb">
                            <img src="<?php echo (URL.'images/holder-item.jpg');?>">
                            <div class="info">
                            <h3><?php echo $row->username; ?></h3></h3>
                        </div>
                        </div>
                    </div>
                </div>
               <?php endforeach; else: ;?>
                <h2> ERROR</h2>
                <?php endif; ?>
        
      </div>

      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div>