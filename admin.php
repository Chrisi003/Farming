<?php
    require('inc/config.php');
    session_start();
    if(!isset($_SESSION['user_name'])){
        header("Location:povolenie.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>
<body class="container">
    <section class="row">
        <h1><b>Admin rozhranie</b></h1><br>
        <h2>Vítaj admin <?php echo($_SESSION['user_name']);?></h2><br>
        <a href="inc/login/logout.php"><b>Odhlásiť sa</b></a><br><br>
    </section>
    <section>
    <br><br>
    <section>
        <h2>Kontakty</h2>
        <?php
            $contact = $Contact->get_contact();
            echo '<table class="table">';
                foreach($contact as $c){
                    echo '<tr>';
                    echo '<td>'.$c->contact_name;'</td>';
                    echo '<td>'.$c->contact_email;'</td>';
                    echo '<td>'.$c->contact_message;'</td>';
                    echo '<td>
                            <form action="inc/contact/delete.php" method="post">
                                <button type = "submit" name="delete_contact" value="'.$c->id.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section><br><br>

    <section>
        <h2>Newsletter</h2>
        <?php
            $news = $News->get_news();
            echo '<table class="table">';
                foreach($news as $n){
                    echo '<tr>';
                    echo '<td>'.$n->news_email;'</td>';
                    echo '<td>
                            <form action="inc/news/delete.php" method="post">
                                <button type = "submit" name="delete_news" value="'.$n->id.'"'.'>Vymazať</button>
                            </form></td>';
                    echo '</tr>';
                }
                echo '</table>';
        ?>
    </section>
</body>
</html>