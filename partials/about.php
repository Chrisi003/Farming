<div class="about">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>What People Say About The Farm</h2> 
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div id="myCarousel" class="carousel slide about_Carousel " data-ride="carousel">
               <ol class="carousel-indicators">
                  <!-- create carousel indicators -->
                  <?php for($i = 0; $i < 3; $i++) { ?>
                  <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" <?php echo ($i == 0) ? 'class="active"' : ''; ?>></li>
                  <?php } ?>
               </ol>
               <div class="carousel-inner">
                  <?php
                  // create an array of testimonials with name and text
                  $testimonials = array(
                     array('name' => 'DI JHONE', 'text' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.'),
                     array('name' => 'JOHN', 'text' => 'Surprise steepest recurred landlord mr wandered amounted of. Continuing devonshire but considered its. Rose past oh shew roof is song neat.'),
                     array('name' => 'Jamal', 'text' => 'Attention he extremity unwilling on otherwise. Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor. So if he into shot half many long. China fully him every fat was world grave.')
                  );
                  // loop through the testimonials array and create carousel items
                  foreach($testimonials as $index => $testimonial) { ?>
                  <div class="carousel-item <?php echo ($index == 0) ? 'active' : ''; ?>">
                     <div class="container">
                        <div class="carousel-caption ">
                           <div class="row">
                              <div class="col-md-12">
                                 <div class="test_box">
                                    <i><img src="images/tes1.png" alt="#"/></i>
                                    <h4><?php echo $testimonial['name']; ?></h4>
                                    <p><?php echo $testimonial['text']; ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <?php } ?>
               </div>
               <!-- add previous and next controls for the carousel -->
               <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </div>
</div>
                  </div>
