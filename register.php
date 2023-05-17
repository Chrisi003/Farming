  <?php
    include('partials/header.php');
  ?>
  <main>
    <br><br><br>
    <section class="col-md-12">
      <div class="row">
      <div class="col-md-3">  
          <h1><b>Registrácia</b></h1>
          <form action="inc/register/insert.php" method="post" class="main_form">
            <input class="contactus" type="text" name="user_name" placeholder="Vaše meno"><br>
            <input class="contactus" type="email" name="user_email" placeholder="Váš email"><br>
            <input class="contactus" type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input class="send_btn" type="submit" value="Zaregistrovať sa" name="add_user">
          </form>
          <br>
          <p>Máte účet? <a href="login.php">Prihláste sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <br><br><br>
  <?php
    include('partials/footer.php');
  ?>