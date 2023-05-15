<?php
    include('partials/header.php');
  ?>
      <!-- banner -->
      <section class="banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12 ">
                  <div class="text-bg">
                     <h1>FARMING COMPANY</h1>
                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <div class="three_box">
    <div class="container">
        <div class="row">
            <?php
                $images = array('img1.jpg', 'img2.jpg', 'img3.jpg');
                for ($i=0; $i<count($images); $i++) {
                    echo '<div class="col-md-4">';
                    echo '<div class="box_text">';
                    echo '<figure><img src="images/'.$images[$i].'" alt="#"/></figure>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</div>
      <!-- hottest -->
      <div  class="hottest">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>World’s Hottest Destinations <br>for Vegans</h2>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="hottest_box">
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
      </div>
      <!-- end hottest -->
      <?php
    include('partials/blog.php');
      ?>
          <?php
    include('partials/product.php');
      ?>
      <?php
    include('partials/about.php');
      ?>
      </div>
      <?php
    include('partials/footer.php');
      ?>


