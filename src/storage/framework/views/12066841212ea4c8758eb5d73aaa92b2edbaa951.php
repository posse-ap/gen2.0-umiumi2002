<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo e(asset('/css/reset.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/css/webapp.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>WEBAPP</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"></script>
</head>

<body>
    <header>
        <div class="all-header">
            <div class="site-header">
                <img src="<?php echo e(asset('/img/posselogo.jpg')); ?>" alt="POSSEロゴ">
                <h1>4th week</h1>
                <p><?php echo e($user->name); ?>さん</p>
                <form action="<?php echo e(route('logout')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <input type="submit" value="ログアウト" class="logout">
                </form>
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
                        <?php $__currentLoopData = $today_hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $today_hour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($today_hour->today_hour == null): ?>
                                <p class="number">
                                    0
                                </p>
                            <?php else: ?>
                                <p class="number">
                                    <?php echo e($today_hour->today_hour); ?>

                                </p>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <p class="hour">hour</p>
                    </div>
                    <div class="studytime">
                        <p class="date">Month</p>
                        <?php $__currentLoopData = $month_hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month_hour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="number"><?php echo e($month_hour->month_hour); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <p class="hour">hour</p>
                    </div>
                    <div class="studytime">
                        <p class="date">Total</p>
                        <?php $__currentLoopData = $total_hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $total_hour): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <p class="number"><?php echo e($total_hour->total_hour); ?></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <p class="hour">hour</p>
                    </div>
                </div>
                <div class="graph" id="chart_div"></div>
                
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
                <script type="text/javascript">
                    const study_result = <?php echo json_encode($study_result, 15, 512) ?>;
                    google.charts.load('current', {
                        packages: ['corechart', 'bar']
                    });
                    google.charts.setOnLoadCallback(drawBasic);
                    function drawBasic() {
                        var data = google.visualization.arrayToDataTable(study_result);
                        var options = {
                            chartArea: {
                                left: 30,
                                top: 20,
                                width: '100%',
                                height: '75%'
                            },
                            hAxis: {
                                ticks: [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30],
                                viewWindow: {
                                    min: 0,
                                    max: 32
                                },
                                gridlines: {
                                    color: 'none'
                                },
                                textStyle: {
                                    color: '#b8cddf'
                                },
                            },
                            vAxis: {
                                gridlines: {
                                    color: 'none'
                                },
                                format: '#h',
                                ticks: [0, 2, 4, 6, 8, 10],
                                textStyle: {
                                    color: '#b8cddf'
                                },
                            }
                        };

                        var chart = new google.visualization.ColumnChart(
                            document.getElementById('chart_div'));
                        chart.draw(data, options);
                    }
                </script>
            </div>
            <div class="rightside">
                <div class="language">
                    <p class="number blank">学習言語</p>
                    <div id="donutchart-language"></div>
                    
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        const language_result = <?php echo json_encode($language_result, 15, 512) ?>;

                        google.charts.load("current", { packages: ["corechart"] });
                        google.charts.setOnLoadCallback(drawChartLanguage);

                        function drawChartLanguage() {
                            var data = google.visualization.arrayToDataTable(language_result);
                        
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
                            chart.draw(data, options);}
                    </script>
                     
                     
                    <div class="legend">
                        <?php $__currentLoopData = $language_hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="item<?php echo e($loop->iteration); ?>">●</p>
                        <legend><?php echo e($value->language_name); ?></legend>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="contents">
                    <p class="number blank">学習コンテンツ</p>
                    <div id="donutchart-content"></div>
                    <script>
                    const content_result = <?php echo json_encode($content_result, 15, 512) ?>    
                    google.charts.load("current", { packages: ["corechart"] });
                    google.charts.setOnLoadCallback(drawChartContent);
                    function drawChartContent() {
                        var data = google.visualization.arrayToDataTable(content_result);
                        var options = {
                            chartArea: { width: '100%', height: '100%' },
                            // title: 'My Daily Activities',
                            pieHole: 0.5,
                            legend: { position: 'bottom' },
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
                    </script>
                       <div class="legend">
                        <?php $__currentLoopData = $content_hours; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p class="item<?php echo e($loop->iteration); ?>">●</p>
                        <legend><?php echo e($value->content_name); ?></legend>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="underside">
            <button class="next">＜</button>
            <span><?php echo date('Y'); ?>年</span>
            <span><?php echo date('m'); ?>月</span>
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

                        <input type="checkbox" id="check-content1" name="content" value=""><label
                            for="check-content1"></label>N予備校
                        <!-- <span class="label__text">
                                <span class="input[name="content"]">
                                    <i class="fa fa-check icon"></i>
                                </span>
                            </span> -->
                        <input type="checkbox" id="check-content2" name="content" value=""><label
                            for="check-content2"></label>ドットインストール
                        <input type="checkbox" id="check-content3" name="content" value=""><label
                            for="check-content3"></label>POSSE課題

                    </div>
                    <p>学習言語（複数選択可）</p>
                    <div class="contact__form__item">
                        <input type="checkbox" id="check-language1" name="content" value=""><label
                            for="check-language1"></label>HTML
                        <input type="checkbox" id="check-language2" name="content" value=""><label
                            for="check-language2"></label>CSS
                        <input type="checkbox" id="check-language3" name="content" value=""><label
                            for="check-language3"></label>JavaScript
                        <input type="checkbox" id="check-language4" name="content" value=""><label
                            for="check-language4"></label>PHP
                        <input type="checkbox" id="check-language5" name="content" value=""><label
                            for="check-language5"></label>Laravel
                        <input type="checkbox" id="check-language6" name="content" value=""><label
                            for="check-language6"></label>SQL
                        <input type="checkbox" id="check-language7" name="content" value=""><label
                            for="check-language7"></label>SHELL
                        <input type="checkbox" id="check-language8" name="content" value=""><label
                            for="check-language8"></label>情報システム基礎知識
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
                        <label for="tweet"></label>
                        <p>Twitterにシェアする</p>
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






    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('/js/webapp.js')); ?>"></script>



</body>

</html>
<?php /**PATH /work/backend/resources/views/webapp.blade.php ENDPATH**/ ?>