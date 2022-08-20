

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
</head>
<body>
    <h2>ユーザー登録</h2>
    <form action="register.php" method="POST">
        <p>
            <label for="username">ユーザー名</label>
            <input type="text" name="username">
        </p>

        <p>
            <label for="email">メールアドレス</label>
            <input type="text" name="email">
        </p>

        <p>
            <label for="password">パスワード</label>
            <input type="password" name="password">
        </p>

        <p>
            <label for="password_conf">パスワード（確認用）</label>
            <input type="password" name="password_conf">
        </p>
        <input type="submit" value="新規登録">



    </form>
    
</body>
</html>