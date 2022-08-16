<?php

// try {
//     $db = new PDO('mysql:dbname=d-career_calender;host=localhost;port=8889;charset=utf8',"root","root");
// } catch(PDOException $e) {
//     print('DB接続エラー：' . $e->getMessage());
// }


require_once 'env.php';
ini_set('display_errors', true);
function connect(){

    $host = DB_HOST;
    $db = DB_NAME;
    $user = DB_USER;
    $pass = DB_PASS;

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    try{
        $pdo = new PDO($dsn, $user, $pass,[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
        echo "成功です。";
    } catch(PDOExeption $e){
        echo '失敗'.$e ->getMessage();
    }
        
}

echo connect();

?>