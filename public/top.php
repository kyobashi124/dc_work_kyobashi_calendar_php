<?php
// エラーを出力する
ini_set('display_errors', "On");
//後にパスの修正
// require_once '/Applications/MAMP/htdocs/dc_work_kyobashi_calendar_php/classes/UserLogic.php'; //Mac用
require_once 'C:\MAMP\htdocs\dc_work_kyobashi_calendar_php\classes\UserLogic.php'; //WIn用

session_start();

// エラーメッセージ
$err = []; 

// バリデーション

if(!$email = filter_input(INPUT_POST, 'email')){
    $err['email'] = 'メールアドレスを入力してください。';
}
//正規表現
if(!$password = filter_input(INPUT_POST, 'password')){
    $err['password'] = 'パスワードを入力してください。';

};

// ログイン処理
if(count($err) > 0){
    // エラーがあった場合は戻す。
    $_SESSION = $err;
    header('Location: login.php');
    return;
}
//ログインが成功した場合
$result = UserLogic::login($email,$password);    
//ログイン失敗時の処理
if (!$result){
    header('Location: login.php');
    return;
}
echo 'ログイン成功です。'








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
<?php if (count($err) > 0) : ?>
        <?php foreach($err as $e) : ?>
            <p><?php echo $e ?></p>
        <?php endforeach ?>
    <?php else : ?>
        <p>ユーザー登録が完了しました。</p>
    <?php endif ?>
    <a href="./login.php">戻る</a>
    
</body>
</html>