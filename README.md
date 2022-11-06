# gen2.0-umiumi2002



  <script>
        
    //棒グラフ
//     google.charts.load('current', { packages: ['corechart', 'bar'] });
//     google.charts.setOnLoadCallback(drawBasic);

//     function drawBasic() {
//     var data = new google.visualization.DataTable();
//     data.addColumn('number', 'Day');
//     data.addColumn('number', 'Study Time');

// data.addRows([
//     <?php  for ($j=1; $j<= 31; $j++ ) { ?>
//   [<?php echo $j; ?>, <?php echo $barChart_[$j][0][0]; ?>],
//     <?php }; ?>    
//     ])
//     var options = {
//         chartArea: { left: 30, top: 20, width: '100%', height: '75%' },
//         hAxis: {
//             ticks: [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 22, 24, 26, 28, 30],
//             viewWindow: {
//                 min: 0,
//                 max: 32
//             },
//             gridlines: { color: 'none' },
//             textStyle: { color: '#b8cddf' },
//         },
//         vAxis: {
//             gridlines: { color: 'none' },
//             format: '#h',
//             ticks: [0, 2, 4, 6, 8, 10],
//             textStyle: { color: '#b8cddf' },
//         }
//     };

//     var chart = new google.visualization.ColumnChart(
//         document.getElementById('chart_div'));
//     chart.draw(data, options);
// }


//         //円グラフ 
//         google.charts.load("current", { packages: ["corechart"] });
//         google.charts.setOnLoadCallback(drawChartLanguage);

//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'HTML'");
//     //7
//     $stmt -> execute();
//     $html = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'CSS'");
//     //6になるはず
//     $stmt -> execute();
//     $css = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'JavaScript'");
//     //10になるはず
//     $stmt -> execute();
//     $javaScript = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'PHP'");
//     //になるはず
//     $stmt -> execute();
//     $php = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'Laravel'");
//     //3になるはず
//     $stmt -> execute();
//     $laravel = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'SQL'");
//     //4になるはず
//     $stmt -> execute();
//     $sql = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE 'SHELL'");
//     //3になるはず
//     $stmt -> execute();
//     $shell = $stmt -> fetchColumn();
//     ?>
//     <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_language LIKE '情報システム基礎知識'");
//     //5になるはず
//     $stmt -> execute();
//     $infoSystem = $stmt -> fetchColumn();
//     ?>

// function drawChartLanguage() {
//     var data = google.visualization.arrayToDataTable([
//         ['Contents', 'Percent'],
//         ['HTML', <?php echo $html ?>],
//         ['CSS', <?php echo $css ?>],
//         ['JavaScript', <?php echo $javaScript ?>],
//         ['PHP', <?php echo $php ?>],
//         ['Laravel', <?php echo $laravel ?>],
//         ['SQL', <?php echo $sql ?>],
//         ['SHELL', <?php echo $shell ?>],
//         ['情報システム基礎知識（その他）', <?php echo $infoSystem ?>]
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
//     var chart = new google.visualization.PieChart(document.getElementById('donutchart-language'));
//     chart.draw(data, options);
// }


// google.charts.load("current", { packages: ["corechart"] });
// google.charts.setOnLoadCallback(drawChartContent);

// <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_content = 'ドットインストール'");
//     $stmt -> execute();
//     $dotInstall = $stmt -> fetchColumn();
//     ?>
// <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_content = 'N予備校'");
//     $stmt -> execute();
//     $nyobikou = $stmt -> fetchColumn();
//     ?>
// <?php
//     $stmt = $db -> prepare("SELECT sum(study_time) FROM webapps WHERE study_content = 'POSSE課題'");
//     $stmt -> execute();
//     $posse = $stmt -> fetchColumn();
//     ?>

// function drawChartContent() {
//     var data = google.visualization.arrayToDataTable([
//         ['Contents', 'Percent'],
//         ['ドットインストール', <?php echo $dotInstall ?>],
//         ['N予備校', <?php echo $nyobikou ?>],
//         ['POSSE課題', <?php echo $posse ?>]
//     ]);

//     var options = {
//         chartArea: { width: '100%', height: '100%' },
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
