<?php
    session_start();
     unset($_SESSION["user_name"]);
     echo '<h1>Boli ste odhlásení</h1>';
     echo '<h3>Vrátiť sa na hlavnú stránku</h3> 
     <a href="/Farming/index.php">Hlavná stránka</a>';
?>