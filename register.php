<?php



// エラーメッセージ
$error = []; 

// バリデーション
if(!$username = filter_input(INPUT_POST, 'username')){
    $error[] = 'ユーザー名を入力してください。';
}

if(!$email = filter_input(INPUT_POST, 'email')){
    $error[] = 'メールアドレスを入力してください。';
}
//正規表現
$password = filter_input(INPUT_POST, 'password');
if(!preg_match('/\A[a-z\d]{8,100}+\z/i',$password)){
    $error[] = "パスワードは8文字以上で記入してください。";
}

$password_conf = filter_input(INPUT_POST, 'password_conf');
if($password !== $password_conf){
    $error[] = "確認用パスワードと異なります。" ;
}

if(count($error)===0){
    // 登録処理
}








?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録完了画面</title>
</head>
<body>
<?php if (count($error) > 0) : ?>
        <?php foreach($error as $e) : ?>
            <p><?php echo $e ?></p>
        <?php endforeach ?>
    <?php else : ?>
        <p>ユーザー登録が完了しました。</p>
    <?php endif ?>
    <a href="./signup.php">戻る</a>
    
</body>
</html>