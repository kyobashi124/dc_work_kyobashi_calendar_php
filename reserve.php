<?php

require('dbconnect.php'); 

if(isset($_POST['name'])) {
    $name=htmlspecialchars($_POST["name"], ENT_QUOTES);
    $time_number=htmlspecialchars($_POST["time_number"], ENT_QUOTES);

    $db->query("INSERT INTO reservation (name,time_number)
              VALUES ('$name','$time_number')");
    header("Location: .");
    exit;
    
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="reserve.css">
    <title>予約ページ</title>
</head>


<body>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card reservedisplay">
                    <div class="card-body">
                        <h5 class="card-title">12:00~</h5>
                        <form action="" method="post">
                            <p class="card-text">利用者名：<input type="text" name="name" required></p>
                            <p class="card-text">支援者名：</p>
                            <input name="time_number" type="hidden" value="1">
                            <input type="submit" value="予約する">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card reservedisplay">
                    <div class="card-body">
                        <h5 class="card-title">12:30~</h5>
                        <form action="" method="post">
                            <p class="card-text">利用者名：<input type="text" name="name" required></p>
                            <p class="card-text">支援者名：</p>
                            <input name="time_number" type="hidden" value="2">
                            <input type="submit" value="予約する">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card reservedisplay">
                    <div class="card-body">
                        <h5 class="card-title">15:00~</h5>
                        <form action="" method="post">
                            <p class="card-text">利用者名：<input type="text" name="name" required></p>
                            <p class="card-text">支援者名：</p>
                            <input name="time_number" type="hidden" value="3">
                            <input type="submit" value="予約する">
                        </form>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card reservedisplay">
                    <div class="card-body">
                        <h5 class="card-title">15:30~</h5>
                        <form action="" method="post">
                            <p class="card-text">利用者名：<input type="text" name="name" required></p>
                            <p class="card-text">支援者名：</p>
                            <input name="time_number" type="hidden" value="4">
                            <input type="submit" value="予約する">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>