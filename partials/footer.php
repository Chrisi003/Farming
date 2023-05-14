<footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
                     </div>
                  </div>
                  <?php
                  include('partials/form.php');
                  ?>  
                   <div class="col-md-3 border_right">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> Location</li>
                        <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a> +71 9087654321</li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com</li>
                     </ul>
                  </div>
                  <?php
                  $pages = [
                     'index' => 'Home',
                     'about' => 'About',
                     'products' => 'Products',
                     'blog' => 'Blog',
                     'contact' => 'Contact',
                  ];
                  ?>

                  <div class="col-md-3 border_right">
                     <h3>Menus</h3>
                     <ul class="link">
                        <?php foreach ($pages as $page => $label) { ?>
                              <li><a href="<?php echo $page ?>.php"><?php echo $label ?></a></li>
                        <?php } ?>
                     </ul>
                  </div>
                  <div class="col-md-3">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Váš email" type="text" name="Enter your email">
                        <button class="sub_btn">Odoberať</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>Copyright 2019 All Right Reserved By <a href="https://html.design/"> Free  html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      </body>
</html>