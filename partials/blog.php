<div class="choose ">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="titlepage">
          <h2>Why Choose Us</h2>
          <p>there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined  </p>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row d_flex">
    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
    <div class="padding_with">
    <div class="row">           
      <?php
        $choose_boxes = array(
          array(
            'icon' => 'images/icon1.png',
            'title' => 'Excellent Service',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a'
          ),
          array(
            'icon' => 'images/icon2.png',
            'title' => 'Clean Working',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a'
          ),
          array(
            'icon' => 'images/icon3.png',
            'title' => 'Quality And Reliability',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a'
          ),
          array(
            'icon' => 'images/icon4.png',
            'title' => 'Expert Farmer',
            'description' => 'It is a long established fact that a reader will be distracted by the readable content of a'
          )
        );
        foreach ($choose_boxes as $box) {
      ?>
      <div class="col-md-6 padding_bottom">
        <div class="choose_box">
          <i><img src="<?php echo $box['icon']; ?>" alt="#"/></i>
          <div class="choose_text">
            <h3><?php echo $box['title']; ?></h3>
            <p><?php echo $box['description']; ?></p>
          </div>
        </div>
      </div> 
      <?php
        }
      ?>
    </div>
  </div>
</div>
<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
               <div class="choose_img">
                  <figure><img src="images/food.jpg" alt="#"/></figure>
</div>
      </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-5">
                <a class="read_more" href="index.php">Read More</a>
            </div>
         </div>
      </div>
      </div>
   </div>