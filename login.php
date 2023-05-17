  <?php
    include('partials/header.php');
  ?>
  <br><br><br>
  <main>
    <section class="col-md-12">
      <div class="row">
      <div class="col-md-3">  
          <h1><b>Prihlásenie</b></h1>
          <form action="inc/login/login.php" method="post" class="main_form">
            <input class="contactus" type="email" name="user_email" placeholder="Váš email"><br>
            <input class="contactus" type="password" name="user_password" placeholder="Vaše heslo"><br>
            <input class="send_btn" type="submit" value="Prihlásiť sa" name="log_user">
          </form>
          <br>
          <p>Nemáte účet? <a href="register.php">Registrujte sa</a></p>
        </div>
      </div>
    </section>
  </main>
  <br><br><br>
  <?php
    include('partials/footer.php');
  ?>
