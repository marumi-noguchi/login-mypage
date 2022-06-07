<?php

    session_start();
    if(isset($_SESSION['id'])) {
        header("Location:mypage.php");
    }

?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>マイページ登録</title>
        <link rel = "stylesheet" type = "text/css" href = "login.css">
    </head>

    <body>
        <header>
            <img src = "4eachblog_logo.jpg"> 
            <div class = "login">
                <a href = "login.php">ログイン</a>
            </div>
        </header>

        <main>
            <form action = "mypage.php" method = "post">
                <p>メールアドレス</p>
                <input type = "text" class = "formbox" size = "40" value = "<?php if (!empty($_COOKIE['mail'])) {
                    echo $_COOKIE['mail'];
                } ?>" name = "mail">

                <p>パスワード</p>
                <input type = "password" class = "formbox" size = "40" value = "<?php if (!empty($_COOKIE['password'])) {
                    echo $_COOKIE['password'];
                } ?>" name = "password">
                <p>
                    <label>
                        <input type = "checkbox"  name = "login_keep" value = "login_keep"
                        <?php
                        if(isset($_COOKIE['login_keep'])) {
                            echo "checked='checked'";
                        }
                        ?>>ログイン状態を保持する
                    </label>
                </p>
                <input type = "submit" class = "submit_button" size = "35" value = "ログイン">
            </form>
        </main>

        <footer>
            ©2018 InterNous.inc All rights reserved
        </footer>
    </body>
</html>