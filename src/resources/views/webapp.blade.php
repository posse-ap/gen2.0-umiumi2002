<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/reset.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
    <link rel="stylesheet" href="{{ asset('/css/webapp.css') }}">
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
                <img src="{{ asset('/img/posselogo.jpg') }}" alt="POSSEロゴ">
                <h1>4th week</h1>
                <p>{{ $user->name }}さん</p>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
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
                        @foreach ($today_hours as $today_hour)
                            @if ($today_hour->today_hour == null)
                                <p class="number">
                                    0
                                </p>
                            @else
                                <p class="number">
                                    {{ $today_hour->today_hour }}
                                </p>
                            @endif
                        @endforeach
                        <p class="hour">hour</p>
                    </div>
                    <div class="studytime">
                        <p class="date">Month</p>
                        @foreach ($month_hours as $month_hour)
                            <p class="number">{{ $month_hour->month_hour }}</p>
                        @endforeach
                        <p class="hour">hour</p>
                    </div>
                    <div class="studytime">
                        <p class="date">Total</p>
                        @foreach ($total_hours as $total_hour)
                            <p class="number">{{ $total_hour->total_hour }}</p>
                        @endforeach
                        <p class="hour">hour</p>
                    </div>
                </div>
                <div class="graph" id="chart_div"></div>
                {{-- 棒グラフ --}}
                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                <script type="text/javascript">
                    const study_result = @json($study_result);
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
                    {{-- 円グラフ --}}
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script type="text/javascript">
                        const language_result = @json($language_result);

                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChartLanguage);

                        function drawChartLanguage() {
                            var data = google.visualization.arrayToDataTable(language_result);

                            var options = {
                                chartArea: {
                                    width: '100%',
                                    height: '100%'
                                },
                                title: 'My Daily Activities',
                                pieHole: 0.5,
                                legend: {
                                    position: 'none'
                                },
                                slices: {
                                    0: {
                                        color: '#0A45EC'
                                    },
                                    1: {
                                        color: '#0F71BD'
                                    },
                                    2: {
                                        color: '#20BDDE'
                                    },
                                },
                                pieSliceBorderColor: 'none',
                                responsive: true,
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('donutchart-language'));
                            chart.draw(data, options);
                        }
                    </script>


                    <div class="legend">
                        @foreach ($language_hours as $value)
                            <p class="item{{ $loop->iteration }}">●</p>
                            <legend>{{ $value->language_name }}</legend>
                        @endforeach
                    </div>
                </div>
                <div class="contents">
                    <p class="number blank">学習コンテンツ</p>
                    <div id="donutchart-content"></div>
                    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                    <script>
                        const content_result = @json($content_result);
                        google.charts.load("current", {
                            packages: ["corechart"]
                        });
                        google.charts.setOnLoadCallback(drawChartContent);

                        function drawChartContent() {
                            var data = google.visualization.arrayToDataTable(content_result);
                            var options = {
                                chartArea: {
                                    width: '100%',
                                    height: '100%'
                                },
                                pieHole: 0.5,
                                legend: {
                                    position: 'bottom'
                                },
                                slices: {
                                    0: {
                                        color: '#0A45EC'
                                    },
                                    1: {
                                        color: '#0F71BD'
                                    },
                                    2: {
                                        color: '#20BDDE'
                                    },
                                },
                                pieSliceBorderColor: 'none',
                                responsive: true,

                            };

                            var chart = new google.visualization.PieChart(document.getElementById('donutchart-content'));
                            chart.draw(data, options);
                        }
                    </script>
                    <div class="legend">
                        @foreach ($content_hours as $value)
                            <p class="item{{ $loop->iteration }}">●</p>
                            <legend>{{ $value->content_name }}</legend>
                        @endforeach
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
        {{-- --------------- modal-------------}}
        <form action="/webapp" method="POST">
            @csrf
            <div class="modal">
                <span class="close-btn"></span>
                <div class="modal-contents">
                    <div class="modal-left">
                        @csrf
                        <p>学習日</p>
                        <div class="calendar">
                            <input id="date" type="date" name="study_date">
                            <div class="calendar__modal">
                            </div>
                        </div>
                        <p>学習コンテンツ（複数選択可）</p>
                        <div class="contact__form__item">
                            <input type="checkbox" id="check-content1" name="content[]" value="N予備校"><label
                                for="check-content1"></label>N予備校
                            <input type="checkbox" id="check-content2" name="content[]" value="ドットインストール"><label
                                for="check-content2"></label>ドットインストール
                            <input type="checkbox" id="check-content3" name="content[]" value="POSSE課題"><label
                                for="check-content3"></label>POSSE課題
                        </div>
                        <p>学習言語（複数選択可）</p>
                        <!-- //foreachで回す -->
                        <div class="contact__form__item">
                            <input type="checkbox" id="check-language1" name="language" value="HTML"><label
                                for="check-language1"></label>HTML
                            <input type="checkbox" id="check-language2" name="language" value="CSS"><label
                                for="check-language2"></label>CSS
                            <input type="checkbox" id="check-language3" name="language" value="JavaScript"><label
                                for="check-language3"></label>JavaScript
                            <input type="checkbox" id="check-language4" name="language" value="PHP"><label
                                for="check-language4"></label>PHP
                            <input type="checkbox" id="check-language5" name="language" value="Laravel"><label
                                for="check-language5"></label>Laravel
                            <input type="checkbox" id="check-language6" name="language" value="SQL"><label
                                for="check-language6"></label>SQL
                            <input type="checkbox" id="check-language7" name="language" value="SHELL"><label
                                for="check-language7"></label>SHELL
                            <input type="checkbox" id="check-language8" name="language" value="情報システム基礎知識"><label
                                for="check-language8"></label>情報システム基礎知識
                        </div>
                    </div>
                    <div class="modal-right">
                        <p>学習時間</p>
                        <div>
                            <input type="text" name="study_time" class="study-time" value="">
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
                    <input type="submit" class="button" id="TWEET" href="http://twitter.com/share?text=" target="_blank" value="記録・投稿">
                </span>
            </div>
        </form>
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
    <script src="{{ asset('/js/webapp.js') }}"></script>



</body>

</html>
