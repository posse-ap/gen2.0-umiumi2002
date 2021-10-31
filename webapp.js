'use strict';

$(document).ready(function () {
    $('.button').click(function () {
        $('.modal').show();
        $('.modal').addClass('.transition');

        // $('.overlay').show();
    });
    $('.close-btn').click(function () {
        $('.modal').hide();
        $('.modal').addClass('.transition');

        // $('.overlay').hide();
    });
});

// r使う////////////
// $(function () {
//     //datepicker処理
//     $('.datepicker').datepicker({
//         showButtonPanel: true, //閉じるボタンと今日ボタンを表示
//         beforeShow: function (textbox, instance) {
//             $('.appendDatepicker').append($('#ui-datepicker-div'));
//         }
//     });
//     //カレンダーボタンをクリックしたらモーダルウィンドウを表示
//     $('#dpTextbox, .ui-datepicker-trigger').on('click', function () {
//         $('.appendDatepicker').addClass('open');
//     });
// });
// 使う///

// const loading = document.querySelector( '#postbutton' );

// window.addEventListener( 'load', () => {
//     loading.classList.add( 'hide' );
// }, false );


$(document).ready(function () {
    $('#postbutton').click(function () {
        $('.loading').show();
        $('.loading').addClass('.transition');

        // $('.overlay').show();
    });
    $('.close-btn').click(function () {
        $('.loading').hide();
        $('.loading').addClass('.transition');

        // $('.overlay').hide();
    });
});


// function(click, => {
//     let
// })

let postbutton = document.getElementById('post')
// ?

// ライブラリのロード
// name:visualization(可視化),version:バージョン(1),packages:パッケージ(corechart)
// google.load('visualization', '1', { 'packages': ['corechart'] });

// // グラフを描画する為のコールバック関数を指定
// google.setOnLoadCallback(drawChart);

// // グラフの描画   
// function drawChart() {

//     // 配列からデータの生成
//     var data = google.visualization.arrayToDataTable([
//         ['年度', '所得税', '法人税', '消費税'],
//         ['H19年度', 16.08, 14.74, 10.27],
//         ['H20年度', 14.99, 10.01, 9.97],
//         ['H21年度', 12.91, 6.36, 9.81],
//         ['H22年度', 12.98, 8.97, 10.03],
//         ['H23年度', 13.48, 9.35, 10.19],
//         ['H24年度', 13.99, 9.76, 10.35],
//         ['H25年度', 15.53, 10.49, 10.83]
//     ]);

//     // オプションの設定
//     // var options = {
//     //     title: '租税の年間推移 ( 単位：兆円 )',
//     // };
//     // 指定されたIDの要素に棒グラフを作成
//     var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

//     // グラフの描画
//     chart.draw(data);
// }

// ▼グラフの中身
// var barChartData = {
// data: {
//     labels: ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20", "22", "24", "26", "28", "30"],
//     datasets: [
//         {
//             fillColor: "rgba(240,128,128,0.6)",    // 塗りつぶし色
//             strokeColor: "rgba(240,128,128,0.9)",  // 枠線の色
//             highlightFill: "rgba(255,64,64,0.75)",  // マウスが載った際の塗りつぶし色
//             highlightStroke: "rgba(255,64,64,1)",   // マウスが載った際の枠線の色
//             data: [1, 30, 40, 45, 60, 70, 80]     // 各棒の値(カンマ区切りで指定)
//         },
//     ]
// },
// options: {                       // オプション
//     responsive: false,  // canvasサイズ自動設定機能を使わない。HTMLで指定したサイズに固定
//     title: {                           // タイトル
//         display: true,                     // 表示設定
//         fontSize: 18,                      // フォントサイズ
//         fontFamily: "sans-serif",
//         text: 'タイトル'                   // タイトルのラベル
//     },
//     legend: {                          // 凡例
//         display: false                     // 表示の有無
//         // position: 'bottom'              // 表示位置
//     },
//     scales: {                          // 軸設定
//         xAxes: [                           // Ｘ軸設定
//             {
//                 display: true,                // 表示の有無
//                 barPercentage: 0.8,           // カテゴリ幅に対する棒の幅の割合
//                 //categoryPercentage: 0.8,    // 複数棒のスケールに対する幅の割合
//                 scaleLabel: {                 // 軸ラベル
//                     display: true,                // 表示設定
//                     labelString: '横軸ラベル',    // ラベル
//                     fontColor: "red",             // 文字の色
//                     fontSize: 16                  // フォントサイズ
//                 },
//                 gridLines: {                   // 補助線
//                     display: false               // 補助線なし
//                 },
//                 ticks: {                      // 目盛り
//                     fontColor: "red",             // 目盛りの色
//                     fontSize: 14                  // フォントサイズ
//                 },
//             }
//         ],
//         yAxes: [                           // Ｙ軸設定
//             {
//                 display: true,                 // 表示の有無
//                 scaleLabel: {                  // 軸ラベル
//                     display: true,                 // 表示の有無
//                     labelString: '縦軸ラベル',     // ラベル
//                     fontFamily: "sans-serif",      // フォントファミリー
//                     fontColor: "blue",             // 文字の色
//                     fontSize: 16                   // フォントサイズ
//                 },
//                 gridLines: {                   // 補助線
//                     //display: false               // 補助線なし
//                     color: "rgba(0, 0, 255, 0.2)", // 補助線の色
//                     zeroLineColor: "black"         // y=0（Ｘ軸の色）
//                 },
//                 ticks: {                       // 目盛り
//                     min: 0,                        // 最小値
//                     max: 25,                       // 最大値
//                     stepSize: 5,                   // 軸間隔
//                     fontColor: "blue",             // 目盛りの色
//                     fontSize: 14                   // フォントサイズ
//                 },
//             },
//         ],
//     },
// }
// var barChartData = {
//     // function myBar () {
//     var ctx = document.getElementById("棒グラフ表示場所").getContext('2d');
//     var myChart = new Chart(ctx, {

//         type: "bar",    // ★必須　グラフの種類
//         data: {
//             labels: ["00年", "05年", "10年", "15年", "20年"],  // Ｘ軸のラベル
//             datasets: [
//                 {
//                     label: "系列Ａ",                            // 系列名
//                     data: [10, 20, 5, 15, 10],                 // ★必須　系列Ａのデータ
//                     backgroundColor: "yellow",                  // 棒の塗りつぶし色
//                     borderColor: "red",                         // 棒の枠線の色
//                     borderWidth: 2                              // 枠線の太さ
//                 }
//             ]
//         },

//         options: {                       // オプション
//             responsive: false,  // canvasサイズ自動設定機能を使わない。HTMLで指定したサイズに固定
//             title: {                           // タイトル
//                 display: true,                     // 表示設定
//                 fontSize: 18,                      // フォントサイズ
//                 fontFamily: "sans-serif",
//                 text: 'タイトル'                   // タイトルのラベル
//             },
//             legend: {                          // 凡例
//                 display: false                     // 表示の有無
//                 // position: 'bottom'              // 表示位置
//             },
//             scales: {                          // 軸設定
//                 xAxes: [                           // Ｘ軸設定
//                     {
//                         display: true,                // 表示の有無
//                         barPercentage: 0.8,           // カテゴリ幅に対する棒の幅の割合
//                         //categoryPercentage: 0.8,    // 複数棒のスケールに対する幅の割合
//                         scaleLabel: {                 // 軸ラベル
//                             display: true,                // 表示設定
//                             labelString: '横軸ラベル',    // ラベル
//                             fontColor: "red",             // 文字の色
//                             fontSize: 16                  // フォントサイズ
//                         },
//                         gridLines: {                   // 補助線
//                             display: false               // 補助線なし
//                         },
//                         ticks: {                      // 目盛り
//                             fontColor: "red",             // 目盛りの色
//                             fontSize: 14                  // フォントサイズ
//                         },
//                     }
//                 ],
//                 yAxes: [                           // Ｙ軸設定
//                     {
//                         display: true,                 // 表示の有無
//                         scaleLabel: {                  // 軸ラベル
//                             display: true,                 // 表示の有無
//                             labelString: '縦軸ラベル',     // ラベル
//                             fontFamily: "sans-serif",      // フォントファミリー
//                             fontColor: "blue",             // 文字の色
//                             fontSize: 16                   // フォントサイズ
//                         },
//                         gridLines: {                   // 補助線
//                             //display: false               // 補助線なし
//                             color: "rgba(0, 0, 255, 0.2)", // 補助線の色
//                             zeroLineColor: "black"         // y=0（Ｘ軸の色）
//                         },
//                         ticks: {                       // 目盛り
//                             min: 0,                        // 最小値
//                             max: 25,                       // 最大値
//                             stepSize: 5,                   // 軸間隔
//                             fontColor: "blue",             // 目盛りの色
//                             fontSize: 14                   // フォントサイズ
//                         },
//                     }
//                 ],
//             },
//             layout: {                          // 全体のレイアウト
//                 padding: {                         // 余白
//                     left: 0,
//                     right: 0,
//                     top: 0,
//                     bottom: 0
//                 }
//             }
//         }
//     });
// }
// // }
// // ▼上記のグラフを描画するための記述
// window.onload = function () {
//     var ctx = document.getElementById("chart_div").getContext("2d");
//     window.myBar = new Chart(ctx).Bar(barChartData);
// }


//円グラフ
google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChartLanguage);
function drawChartLanguage() {
    var data = google.visualization.arrayToDataTable([
        ['Contents', 'Percent'],
        ['Html', 5.9],
        ['CSS', 5.9],
        ['JavaScript', 23.5],
        ['PHP', 14.7],
        ['Laravel', 8.8],
        ['SQL', 29.4],
        ['SHELL', 10.8]
        // ['情報システム基礎知識（その他）', 1.0]
    ]);

    var options = {
        chartArea:{width:'100%',height:'100%'},
        title: 'My Daily Activities',
        pieHole: 0.5,
        legend:
        { position: 'none'},
        slices: {
            0: { color: '#0A45EC' },
            1: { color: '#0F71BD' },
            2: { color: '#20BDDE' },
        },
        pieSliceBorderColor: 'none'
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart-language'));
    chart.draw(data, options);
}


google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChartContent);
function drawChartContent() {
    var data = google.visualization.arrayToDataTable([
        ['Contents', 'Percent'],
        ['Work', 11],
        ['Eat', 2],
        ['Commute', 2],
        ['Watch TV', 2],
        ['Sleep', 7]
    ]);

    var options = {
        chartArea:{width:'100%',height:'100%'},
        title: 'My Daily Activities',
        pieHole: 0.5,
        legend:
        { position: 'none'},
        slices: {
            0: { color: '#0A45EC' },
            1: { color: '#0F71BD' },
            2: { color: '#20BDDE' },
        },
        pieSliceBorderColor: 'none'
    };

    var chart = new google.visualization.PieChart(document.getElementById('donutchart-content'));
    chart.draw(data, options);
}