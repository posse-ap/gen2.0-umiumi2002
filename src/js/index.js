// ボタンのDOM要素を取得,クラス名で取得
var btn = document.querySelectorAll(".question__list");
// ボタンの個数分ループ
// 変数「i」に現在のループ回数が代入される
// for ($i = 1; $i <= count($choices) / 3; $i++) {
  for (var i = btn.length - 1; i >= 0; i--) {
    // 各ボタンをイベントリスナーに登録
    btn[i].addEventListener("click", function () {
      // activeクラスの追加と削除
      if (this.classList.contains("1") == true) {
        this.classList.add("succeeded");

        // 正解の箱を表示
        $(".question__answer").addClass("show");

        // クリックできなくする
        $(".question__list").addClass("cant_click");
      } else {
        this.classList.add("failed");
        $(".1").addClass("succeeded");
        // 回答ボックスの文字・色を変更
        $(".question__answer__text").text("不正解");

        // 不正解の箱を表示
        $(".question__answer__text").addClass("fail_answer_text");
        $(".question__answer").addClass("show");

        // クリックできなくする
        $(".question__list").addClass("cant_click");
      }
    });
  }
// }
