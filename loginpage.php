<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="loginpage.css">
    <title>ログイン画面</title>
</head>
<body>
    <div class="background">
        <h2>ログイン画面</h2>
            <?php if (isset($err['msg'])):?>
                <p><?php echo $err['msg']; ?></p>
            <?php endif; ?>
        <form action="login.php" method="POST">
        
            <p>
                <label for="email">メールアドレス</label><br>
                <input type="text" name="email" class="input">
                <?php if (isset($err['email'])):?>
                    <p><?php echo $err['email']; ?></p>
                <?php endif; ?>
            </p>

            <p>
                <label for="password">パスワード</label><br>
                <input type="password" name="password" class="input">
                <?php if (isset($err['password'])):?>
                    <p><?php echo $err['password']; ?></p>
                <?php endif; ?>
            </p>
    
            <input type="submit" value="ログイン" class="submit" >

        </form>
        <a href="signup.php">新規登録はこちら</a>
    </div>
</body>
</html>