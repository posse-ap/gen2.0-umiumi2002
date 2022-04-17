// ボタンのDOM要素を取得,クラス名で取得
//配列のとり方btnsを配列
// let container = document.getElementById('container');
// let btns = [];
// btns = container.getElementsByTagName('li');
// //htmlcollectionは配列じゃない⇒
// const Btns = Array.prototype.slice.call(btns);

/**
 * [description]
 */

//配列にする

/**
 * @param
 */
console.log('i');

/**
 * check関数 
 * @param  {Number} question_id 問題番号
 * @param  {Number} choice_id 選択肢番号
 * @param  {Number} valid 正解番号
 */
function check (question_id, choice_id, valid) {
  console.log('s');
  if (valid === 1) {
    console.log('seikai');
    $('.question__list_'+ question_id + '_' + choice_id).addClass("succeeded");
    $('.question__answer_' + question_id).addClass("show");
    $(".question__list_" + question_id).addClass("cant_click");
    $(".question__answer__text").text("正解");
    $(".question__answer__text").removeClass("fail_answer_text");
  } else {
    $('.question__list_'+ question_id + '_' + choice_id).addClass("failed");
    $('.question__list_'+ question_id + '_' + 1).addClass("succeeded");
    $('.question__answer_' + question_id).addClass("show");
    $(".question__answer__text").text("不正解");
    $(".question__answer__text").addClass("fail_answer_text");
    $(".question__list_" + question_id).addClass("cant_click");

  }
};

// Btns.forEach(function(btn) {
//   // ボタンの個数分ループ
//       // console.log(j);
//       // 各ボタンをイベントリスナーに登録
//       btn.addEventListener("click", function () {

//         // var aaa = ~~(j/3);

//         // activeクラスの追加と削除
//         if (this.classList.contains("1") == true) {
//           this.classList.add("succeeded");
  
//           // 正解の箱を表示
//           // $(".question__answer_"+ Math.floor(aaa)).classList.remove("question__answer");
//           $(".question__answer").addClass("show");
  
//           // クリックできなくする
//           $(".question__list").addClass("cant_click");
//         } else {
//           this.classList.add("failed");
//           $(".1").addClass("succeeded");
//           // 回答ボックスの文字・色を変更
//           $(".question__answer__text").text("不正解");
  
//           // 不正解の箱を表示
//           $(".question__answer__text").addClass("fail_answer_text");
//           $(".question__answer").addClass("show");
  
//           // クリックできなくする
//           $(".question__list").addClass("cant_click");
//         }
//       });
//     });



  //question__answer_1のときにbtnの選択肢0,1,2を1に、question__answer_2のときにbtnの選択肢3,4,5に対応するようにjを設定したい
