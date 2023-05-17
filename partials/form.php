<div class="col-md-12">
                     <form id="contact" action="inc/contact/insert.php" method="post" class="main_form">
                        <div class="row">
                           <div class="col-md-3 ">
                              <input class="contactus" placeholder="Vaše meno" type="text" id ="contact_name" name = "contact_name" required> 
                           </div>
                           <div class="col-md-3">
                              <input class="contactus" placeholder="Váš email" type="email" id="contact_email" name ="contact_email" required> 
                           </div>
                           <div class="col-md-8">
                              <textarea class="contactus1" placeholder="Vaša správa" id="contact_message" name="contact_message"></textarea>
                              <input type="checkbox" required><label for=""> Súhlasím so spracovaním osobných údajov.</label><br>
                           </div>
                           <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                           <input type="submit" value="Odoslať" name="contact_us" class="send_btn">
                           </div>
                        </div>
                     </form>
                  </div>