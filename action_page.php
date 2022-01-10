<?php
    $email = $_GET['email'];
    $psw = $_GET['psw'];

    $newmail = htmlspecialchars($email, ENT_QUOTES);
    $newpsw = htmlspecialchars($psw, ENT_QUOTES);
    echo $newmail;
    echo "<br>";
    echo $newpsw;
    echo "<br>";
    echo password_hash($newpsw, PASSWORD_DEFAULT);

?>