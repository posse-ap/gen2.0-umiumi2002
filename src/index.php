<?php require($_SERVER['DOCUMENT_ROOT'] . "/db_connect.php");
// $id = htmlspecialchars($_GET["id"]);
// jsを書き込んだとしても、ただの文字として扱ってほしい


// prefectures
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $prefectures_value =  "SELECT * FROM prefectures WHERE id = $id";
  $prefectures = $db->query($prefectures_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
}
echo ($prefectures[$id]["name"]);


// questions
// if (isset($_GET['id'])) {
//   $id = $_GET['id'];
//   $questions_value =  "SELECT * FROM questions WHERE prefecture_id = $id";
//   $questions = $db->query($questions_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
// }
// foreach ($questions as $question) {
//   echo ($question['name']);
// }
// print_r($questions[$id]);
// echo ($questions[$id]["name"]);

// choices
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $choices_value =  "SELECT * FROM choices WHERE prefecture_id = $id";
  //questionidとidをイコールにしちゃうと一番の高輪しかとれなくなっちゃう・・
  $choices = $db->query($choices_value)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
//１だと東京の選択肢だけ
}
// foreach ($choices as $choice) {
//   echo (print_r($choice));
// }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>quizy</title>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="question">
    <?php
    if (isset($_GET['id'])) { ?>
      <?php
      for ($i =1; $i<= count($choices)/3; $i++){?>
      <h1 class="question__title">
        <?php // 問題番号動的
        // foreach ($ as $choice) {
        //   echo ($choice['question_id']);
        //   if ($choice == $choice) {
        //     break;
        //   }
        echo $i; 
        // }
        ?>
        .この地名はなんて読む？
      </h1>
      <?php $choices_counts =  "SELECT * FROM choices WHERE prefecture_id = $id AND question_id = $i";
        // 都道府県番号と、問題番号が一致している時（東京の高輪、東京の亀戸） 
        $counts = $db->query($choices_counts)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);

        $choices_corrects =  "SELECT * FROM choices WHERE prefecture_id = $id AND question_id = $i AND correct = 1";
        // 都道府県番号と問題番号と正解番号が一致している時
        $corrects = $db->query($choices_corrects)->fetchAll(PDO::FETCH_ASSOC | PDO::FETCH_UNIQUE);
        ?>

      <!-- <?php 
        $question_id = "SELECT * FROM choices WHERE question_id = $i"; 
        // for文でiが問題番号と一致してるから使わない
      ?>   -->

      <img class="question__img" src="./img/<?php echo $id?>_<?php echo $i?>.png" alt="選択肢の写真">


      <ul class="question__lists">
        <?php shuffle($counts) ?>
        <!-- countsは東京の選択肢全部 -->
        <?php foreach ($counts as $count) { ?>
          <!-- 連想配列、使う必要性？？？ foreachで選択肢をそれぞれ出力-->
          <li class="question__list <?php if ($count['correct'] == 1) {echo 1;} else {echo 0;} ?>">
          <!-- 正解だったらクラス名に1、不正解だったらクラス名に0が付く -->
            <?php echo $count['name']; ?>
          </li>
        <?php
        } ?>
      </ul>
      <div class="question__answer question__answer_<?php echo $i ?>">
        <p class="question__answer__text">正解！</p>
        <p class="question__answer__text__choice">
          正解は「
          <?php foreach ($corrects as $correct) {
            echo ($correct['name']);
          } ?>
          」です！
        </p>
      </div>
      <?php }; ?>
      <?php } else {
        echo "URLにidが指定されていません。";
      } ?>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="./js/index.js"></script>
</body>

</html>


<!-- 問題！！！！！
東京の一問目と二問目のjsが同時に動く
・一問目の正解を押したとき、二問目は青くならずに正解ボックスだけ出る
・一問目の不正解押したら、二問目は青く光って不正解ボックスが出る
二問目を先に押しても同様


青くするのは押したボタンだから-->