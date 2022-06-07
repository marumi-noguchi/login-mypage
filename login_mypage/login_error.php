<?php

session_start();
if(isset($_SESSION['id'])) {
    header("location:mypage.php");
}

?>

<DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>マイページ登録</title>
        <link rel = "stylesheet" type = "text/css" href = "login_error.css">
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
                <p class = "error_message">メールアドレスまたはパスワードが間違っています。</p>

                <p class = "contents">メールアドレス</p>
                <input type = "text" class = "formbox" size = "40" name = "mail">

                <p class = "contents">パスワード</p>
                <input type = "password" class = "formbox" size = "40" name = "password">

                <p class = "login_keep">
                    <label>
                        <input type = "checkbox" value = "login_keep" name = "login_keep">ログイン状態を保持する
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