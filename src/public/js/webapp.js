'use strict';

$(document).ready(function() {
    $('.button').click(function() {
        $('.modal').show();
        $('.modal').addClass('.transition');

        // $('.overlay').show();
    });
    $('.responsiveButton').click(function() {
        $('.modal').show();
        $('.modal').addClass('.transition');

        // $('.overlay').show();
    });
    $('.close-btn').click(function() {
        $('.modal').hide();
        $('.modal').addClass('.transition');

        // $('.overlay').hide();
    });
});

//カレンダー
$(document).ready(function() {
    $('#postbutton').click(function() {
        $('.loading').show();
        $('.loading').addClass('.transition');

        // $('.overlay').show();
    });
    $('.close-btn').click(function() {
        $('.loading').hide();
        $('.loading').addClass('.transition');

        // $('.overlay').hide();
    });
});


////////////なんだこれ↓
let postbutton = document.getElementById('post')

//tweet画面遷移（完）完


// ローディング画面
// const loading = document.querySelector('.loading-area');これ必要？
let post = document.getElementById('TWEET');

function disappear() {
    circle.style.display = 'none';
}

function complete() {
    loading.style.display = 'block';
}

function twitter() {
    let tweetArea = document.getElementById('tweet');
    // post.addEventListener('click', () => {
    if (tweetArea.checked) {
        window.open("https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById('tweetBox').value), null)
    }
    // })
}


post.addEventListener('click', function(event) {
    event.preventDefault();
    // document.getElementById('circle').style.display='block'
    circle.style.display = 'block';
    setTimeout(disappear, 3000);
    setTimeout(complete, 3000);
    setTimeout(twitter, 3000);

    // circle.classList.add('hide');
}, false);


//円グラフ
// google.charts.load("current", { packages: ["corechart"] });
// google.charts.setOnLoadCallback(drawChartLanguage);

// function drawChartLanguage() {
//     var data = google.visualization.arrayToDataTable([
//         ['Contents', 'Percent'],
//         ['Html', 5.9],
//         ['CSS', 5.9],
//         ['JavaScript', 23.5],
//         ['PHP', 14.7],
//         ['Laravel', 8.8],
//         ['SQL', 29.4],
//         ['SHELL', 10.7],
//         ['情報システム基礎知識（その他）', 0]
//     ]);

//     var options = {
//         chartArea: { width: '100%', height: '100%' },
//         title: 'My Daily Activities',
//         pieHole: 0.5,
//         legend: { position: 'none' },
//         slices: {
//             0: { color: '#0A45EC' },
//             1: { color: '#0F71BD' },
//             2: { color: '#20BDDE' },
//         },
//         pieSliceBorderColor: 'none',
//         responsive: true,
//     };
//     // let startX = me.startX - 1
//     // let selectionWidth = me.clientX - gridRectDim.left - startX - 1

//     var chart = new google.visualization.PieChart(document.getElementById('donutchart-language'));
//     chart.draw(data, options);
// }


// google.charts.load("current", { packages: ["corechart"] });
// google.charts.setOnLoadCallback(drawChartContent);

// function drawChartContent() {
//     var data = google.visualization.arrayToDataTable([
//         ['Contents', 'Percent'],
//         ['ドットインストール', 30],
//         ['N予備校', 50],
//         ['POSSE課題', 20],
//     ]);

//     var options = {
//         chartArea: { width: '100%', height: '100%' },
//         // title: 'My Daily Activities',
//         pieHole: 0.5,
//         legend: { position: 'none' },
//         slices: {
//             0: { color: '#0A45EC' },
//             1: { color: '#0F71BD' },
//             2: { color: '#20BDDE' },
//         },
//         pieSliceBorderColor: 'none',
//         responsive: true,

//     };

//     var chart = new google.visualization.PieChart(document.getElementById('donutchart-content'));
//     chart.draw(data, options);
// }

// //再描画
// window.onresize = function() {
//     drawBasic();
//     drawChartLanguage();
//     drawChartContent();
// }

