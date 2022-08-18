<?php

session_start();
$err = $_SESSION;

// sessionを消す
$_SESSION = array();
session_destroy();

?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    <h2>ログイン画面</h2>
        <?php if (isset($err['msg'])):?>
            <p><?php echo $err['msg']; ?></p>
        <?php endif; ?>
    <form action="top.php" method="POST">
        
        <p>
            <label for="email">メールアドレス</label>
            <input type="text" name="email">
            <?php if (isset($err['email'])):?>
                <p><?php echo $err['email']; ?></p>
            <?php endif; ?>
        </p>

        <p>
            <label for="password">パスワード</label>
            <input type="password" name="password">
            <?php if (isset($err['password'])):?>
                <p><?php echo $err['password']; ?></p>
            <?php endif; ?>
        </p>

        
        <input type="submit" value="ログイン">

        



    </form>
    <a href="signup.php">新規登録はこちら</a>
</body>
</html>