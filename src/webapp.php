<?php require($_SERVER['DOCUMENT_ROOT'] . "/db_connect.php");?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="./css/webapp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>WEBAPP</title>
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.j/s"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
</head>

<body>
    <header>
        <div class="all-header">
            <div class="site-header">
                <img src="./img/posselogo.jpg" alt="POSSEロゴ">
                <h1>4th week</h1>
                <button class="button" id="post">記録・投稿</button>
            </div>
        </div>
    </header>
    <main>
        <div class="all-container">
            <div class="leftside">
                <div class="studies">
                    <div class="studytime">
                        <p class="date">Today</p>
                       <?php 
                        $today = date("Y-m-d");
                    //    var_dump($today);
                        $stmt = $db -> prepare("SELECT study_time FROM webapps WHERE study_date = :today");
                        $stmt -> bindParam(":today",$today);
                        $stmt -> execute();
                        $study_time = $stmt -> fetchColumn();
                        //stmtにobject型で入っているデータを単一にして代入する
                        //fetch＝配列返される
                        ?>
                        <p class="number"><?php echo $study_time ?></p>
                        <p class="hour">hour</p>
                    </div>
                    <div class="studytime">
                        <p class="date">Month</p>
                        <?php 
                        $month = date("Y-m");
                        $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_date LIKE '2022-03%'");
                        $stmt -> bindParam(":month",$month);
                        $stmt -> execute();
                        $month_study_time = $stmt -> fetchColumn();


                            // $month = "SELECT sum(study_time) FROM webapps YEAR(study_date)=DATE('Y') AND MONTH(study_date)= DATE('m')";
                            // $month = "SELECT sum(study_time) FROM webapps WHERE DATE('Y', strtotime(study_date))=2022";
                            // $stmt = $db -> query($month)->fetchColumn();
                            // print_r($stmt);
                        ?>
                        <p class="number"><?php echo $month_study_time ?></p>
                        <p class="hour">hour</p>
                    </div>
                    <div class="studytime">
                        <p class="date">Total</p>
                        <?php 
                             $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps");
                            //  $stmt -> bindParam(":month",$month);
                             $stmt -> execute();
                             $all_study_time = $stmt -> fetchColumn();
                        ?>
                        <p class="number"><?php echo $all_study_time ?></p>
                        <p class="hour">hour</p>
                    </div>
                </div>

                <div class="graph" id="chart_div"></div>
            </div>
            <div class="rightside">
                <div class="language">
                    <p class="number blank">学習言語</p>
                    <div id="donutchart-language"></div>
                    <div class="legend">
                        <p class="item1">●</p>
                        <legend>HTML</legend>
                        <p class="item2">●</p>
                        <legend>CSS</legend>
                        <p class="item3">●</p>
                        <legend>JavaScript</legend>
                        <p class="item4">●</p>
                        <legend>PHP</legend>
                        <p class="item5">●</p>
                        <legend>Laravel</legend>
                        <p class="item6">●</p>
                        <legend>SQL</legend>
                        <p class="item7">●</p>
                        <legend>SHELL</legend>
                        <p class="item8">●</p>
                        <legend>情報システム基礎知識<br>(その他)</legend>
                    </div>
                </div>
                <div class="contents">
                    <p class="number blank">学習コンテンツ</p>
                    <div id="donutchart-content"></div>
                    <div class="legend">
                        <p class="item1">●</p>
                        <legend>ドットインストール</legend>
                        <p class="item2">●</p>
                        <legend>N予備校</legend>
                        <p class="item3">●</p>
                        <legend>POSSE課題</legend>
                    </div>
                </div>
            </div>
        </div>
        <div class="underside">
            <button class="next">＜</button>
            <span>年</span>
            <span>月</span>
            <button class="next">＞</button>
        </div>
        <div>
            <button class="responsiveButton" id="responsivePost">記録・投稿</button>
        </div>
        <div class="modal">
            <span class="close-btn"></span>
            <div class="modal-contents">
                <div class="modal-left">
                    <p>学習日</p>
                    <div class="calendar">
                        <!-- <input type="text" name="datepicker" class="datepicker" value=""> -->
                        <input id="date" type="date" name="date">
                        <div class="calendar__modal">
                        </div>
                    </div>
                    <p>学習コンテンツ（複数選択可）</p>
                    <div class="contact__form__item">

                        <input type="checkbox" id="check-content1" name="content" value=""><label for="check-content1"></label>N予備校
                            <!-- <span class="label__text">
                                <span class="input[name="content"]">
                                    <i class="fa fa-check icon"></i>
                                </span>
                            </span> -->
                        <input type="checkbox" id="check-content2" name="content" value=""><label for="check-content2"></label>ドットインストール
                        <input type="checkbox" id="check-content3" name="content" value=""><label for="check-content3"></label>POSSE課題

                    </div>
                    <p>学習言語（複数選択可）</p>
                    <div class="contact__form__item">
                        <input type="checkbox" id="check-language1" name="content" value=""><label for="check-language1"></label>HTML
                        <input type="checkbox" id="check-language2" name="content" value=""><label for="check-language2"></label>CSS
                        <input type="checkbox" id="check-language3" name="content" value=""><label for="check-language3"></label>JavaScript
                        <input type="checkbox" id="check-language4" name="content" value=""><label for="check-language4"></label>PHP
                        <input type="checkbox" id="check-language5" name="content" value=""><label for="check-language5"></label>Laravel
                        <input type="checkbox" id="check-language6" name="content" value=""><label for="check-language6"></label>SQL
                        <input type="checkbox" id="check-language7" name="content" value=""><label for="check-language7"></label>SHELL
                        <input type="checkbox" id="check-language8" name="content" value=""><label for="check-language8"></label>情報システム基礎知識
                    </div>
                </div>
                <div class="modal-right">
                    <p>学習時間</p>
                    <div>
                        <input type="text" name="datepicker" class="study-time" value="">
                    </div>
                    <p>Twitter用コメント</p>
                    <textarea id="tweetBox" class="twitter-comment" name="tweet_box" cols="40" rows="8"></textarea>
                    <div class="sharebutton"><input type="checkbox" id="tweet" name="content">
                        <label for="tweet" ></label><p>Twitterにシェアする</p>
                    </div>

                </div>
            </div>
            <span class="postbutton">
                <a class="button" id="TWEET" href="http://twitter.com/share?text=" target="_blank">記録・投稿</a>
            </span>
        </div>
        <div class="loading" id="loading">
            <span class="close-btn"></span>
            <div class="a">
                <p>Awesome!!</p>
                <div class="check-text">✓</div>
                <p>記録・投稿<br>完了しました</p>
            </div>
        </div>
        <div class="loading-area">
            <span class="circle" id="circle"></span>
        </div>
    </main>
    <script>
        //円グラフ 
        google.charts.load("current", { packages: ["corechart"] });
        google.charts.setOnLoadCallback(drawChartLanguage);

function drawChartLanguage() {

    <?php
    $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'HTML'");
    //7
    $stmt -> execute();
    $html = $stmt -> fetchColumn();
    ?>
    var data = google.visualization.arrayToDataTable([
        ['Contents', 'Percent'],
        ['HTML', <?php echo $html ?>],
        ['CSS', 5.9],
        ['JavaScript', 23.5],
        ['PHP', 14.7],
        ['Laravel', 8.8],
        ['SQL', 29.4],
        ['SHELL', 10.7],
        ['情報システム基礎知識（その他）', 0]
    ]);

    var options = {
        chartArea: { width: '100%', height: '100%' },
        title: 'My Daily Activities',
        pieHole: 0.5,
        legend: { position: 'none' },
        slices: {
            0: { color: '#0A45EC' },
            1: { color: '#0F71BD' },
            2: { color: '#20BDDE' },
        },
        pieSliceBorderColor: 'none',
        responsive: true,
    };
    var chart = new google.visualization.PieChart(document.getElementById('donutchart-language'));
    chart.draw(data, options);
}


google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChartContent);

function drawChartContent() {
    var data = google.visualization.arrayToDataTable([
        ['Contents', 'Percent'],
        ['ドットインストール', 30],
        ['N予備校', 50],
        ['POSSE課題', 20],
    ]);

    var options = {
        chartArea: { width: '100%', height: '100%' },
        pieHole: 0.5,
        legend: { position: 'none' },
        slices: {
            0: { color: '#0A45EC' },
            1: { color: '#0F71BD' },
            2: { color: '#20BDDE' },
        },
        pieSliceBorderColor: 'none',
        responsive: true,

    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart-content'));
    chart.draw(data, options);
}

//再描画
window.onresize = function() {
    drawBasic();
    drawChartLanguage();
    drawChartContent();
}
</script>

    <script src="./js/webapp.js"></script>
</body>

</html>