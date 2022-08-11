<?php

if(isset($_POST['name'])) {
    //名前が送信されたら以下の処理を行う
    //この部分は変更してもいい

    //「予約フォーム」からの情報をそれぞれ変数に格納しておく↓
  $name=htmlspecialchars($_POST["name"], ENT_QUOTES);
  $time_number=htmlspecialchars($_POST["time_number"], ENT_QUOTES);
  $day=htmlspecialchars($_POST["day"], ENT_QUOTES);
          //「予約フォーム」からの情報をそれぞれ変数に格納しておく↑
  $db->query("INSERT INTO reservation (name,time_number,day)
              VALUES ('$name','$time_number','$day')");
  header("Location: " . "?ym={$_REQUEST['ym']}");
  // "reservation_form.php（予約フォームがあったページ）"に戻る
  exit;
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>予約ページ</title>
</head>


<body>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>