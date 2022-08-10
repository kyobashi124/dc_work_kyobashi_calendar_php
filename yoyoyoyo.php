<?php
// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

// 前月・次月リンクが押された場合は、GETパラメーターから年月を取得
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // 今月の年月を表示
    $ym = date('Y-m');
}

// タイムスタンプを作成し、フォーマットをチェックする
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}

// 今日の日付 フォーマット　例）2018-07-3
$today = date('Y-m-j');

// カレンダーのタイトルを作成　例）2017年7月
$html_title = date('Y年n月', $timestamp);

// 前月・次月の年月を取得
// 方法１：mktimeを使う mktime(hour,minute,second,month,day,year)
//$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
//$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

 //方法２：strtotimeを使う
 $prev = date('Y-m', strtotime('-1 month', $timestamp));
 $next = date('Y-m', strtotime('+1 month', $timestamp));

// 該当月の日数を取得
$day_count = date('t', $timestamp);

// １日が何曜日か　0:日 1:月 2:火 ... 6:土
// 方法１：mktimeを使う
//$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
// 方法２
 $youbi = date('w', $timestamp);


// カレンダー作成の準備
$weeks = [];
$week = '';

// 第１週目：空のセルを追加
// 例）１日が水曜日だった場合、日曜日から火曜日の３つ分の空セルを追加する
$week .= str_repeat('<td></td>', $youbi);

for ( $day = 1; $day <= $day_count; $day++, $youbi++) {

    // 2017-07-3
    $date = $ym . '-' . $day;

    if ($today == $date) {
        // 今日の日付の場合は、class="today"をつける
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    $week .= '</td>';

    // 週終わり、または、月終わりの場合
    if ($youbi % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // 月の最終日の場合、空セルを追加
            // 例）最終日が木曜日の場合、金・土曜日の空セルを追加
            $week .= str_repeat('<td></td>', 6 - $youbi % 7);
        }

        // weeks配列にtrと$weekを追加する
        $weeks[] ='<tr>' . $week . '</tr>';

        // weekをリセット
        $week = '';
	}
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
    <style>
        .container {
        
            font-family: 'Noto Sans JP', sans-serif;
            margin-top: 18px;
            width:70%;
            float: left;
        }
        h3 {
            margin-bottom: 30px;
        }
        th {
            height: 30px;
            text-align: center;
            background-color: #FFCC66;
            color: white;
        }
        td {
            height: 100px;
        }
        .today {
            background: #FFCC66;
        }
        .reservedisplay{
            padding-left: 15px;
            margin-top: 12px;
            height: 120px;
            background-color:#FFCC66;
            width: 300px;
            float: left;
            margin-left: 35px;
            padding-bottom: 100px;
        
        }
        .reservedisplay,p{
            font-size: 20px;
        }
        .user{
            width: 200px;
            height: 50px;
            margin-top: 30px;
            margin-bottom: 40px;
            margin-left: 30px;
            background-color: #FFCC66;
            
        }
        p{
            padding-top: 10px;
            
        }
         .nx{
            margin-left: 30px;
            color:white;
            font-weight: bold;
            background: #FFCC66;
            padding: 5px 15px;
            border-radius: 6px;
        }
        .pr{
           
            color:white;
            font-weight: bold;
            background:#FFCC66;
            padding: 5px 15px;
            border-radius: 6px;
        }
         
         
       
         
    
    </style>
</head>
<body>

    
    <div class="container">
        <h3><a  class="pr" href="?ym=<?php echo $prev; ?>">&lt;</a>  <a class="nx"  href="?ym=<?php echo $next; ?>">&gt;</a> <?php echo $html_title; ?></h3>
        <table class="table table-bordered">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
        </table>
    </div>
    <button class="user">予約</button>
    <div class="reservedisplay">
        <p>12:00~</p>
        <p>利用者名：<br>担当：</p>
    </div>

    <div class="reservedisplay">
        <p>12:30~</p>
        <p>利用者名：<br>担当：</p>
    </div>

    <div class="reservedisplay">
        <p>15:00~</p>
        <p>利用者名：<br>担当：</p>
    </div>

    <div class="reservedisplay">
        <p>15:30~</h2>
        <p>利用者名：<br>担当：</p>
    </div>
    

</body>
</html>