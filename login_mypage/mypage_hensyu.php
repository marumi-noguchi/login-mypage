<?php
mb_internal_encoding("utf8");

session_start();

if(empty($_POST['from_mypage'])) {
    header("Location:login_error.php");
}

?>

<!DOCTYPE html>
<html lang = "ja">
    <head>
        <meta charset = "UTF-8">
        <title>マイページ登録</title>
        <link rel = "stylesheet" type = text/css href = "mypage_hensyu.css">
    </head>

    <body>
         <header>
            <img src = "4eachblog_logo.jpg">
            <div class = "logout">
                <a href = "log_out.php">ログアウト</a>
            </div>
        </header>

        <main>
            <form action = "mypage_update.php" method = "post">

                <div class = "info">
                    <h2>会員情報</h2>
                    <p class = "greeting"><?php echo "こんにちは! ".$_SESSION['name']."さん" ?></p>
                    <img src = "<?php echo $_SESSION['picture']; ?>">
                    <div class = "contents">
                        <p>氏名：<input type = "text" size = "30" class = "txt" value = "<?php echo $_SESSION['name']; ?>" name = "name"></p>
                        <p>メール：<input type = "text" size = "30" class = "txt" value = "<?php echo $_SESSION['mail']; ?>" name = "mail"></p>
                        <p>パスワード：<input type = "text" size = "30" class = "txt" value = "<?php echo $_SESSION['password']; ?>" name = "password" pattern = "^[a-zA-Z0-9]{6,}$"></p>
                    </div>

                    <div class = "comments">
                        <textarea rows = 5 cols = 45 name = "comments"><?php echo $_SESSION['comments']; ?></textarea>
                    </div>

                    <input type="submit" class = "button" value = "この内容に更新する">
                </div> 
            </form>
        </main>   

        <footer>
            ©2018 InterNous.inc. All rights reserved
        </footer>
    
    </body>
</html>