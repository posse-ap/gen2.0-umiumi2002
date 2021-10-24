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

$(function () {
    //datepicker処理
    $('.datepicker').datepicker({
        // buttonImage: "./common/img/calendar.png",  // カレンダーアイコン画像
        // buttonText: "カレンダーから選択",  // アイコンホバー時の表示文言
        // buttonImageOnly: true, // ボタンとして表示
        // showOn: "both",  // アイコン、テキストボックスどちらをクリックでもカレンダー表示
        showButtonPanel: true, //閉じるボタンと今日ボタンを表示
        beforeShow: function (textbox, instance) {
            $('.appendDatepicker').append($('#ui-datepicker-div'));
        }
    });
    //カレンダーボタンをクリックしたらモーダルウィンドウを表示
    $('#dpTextbox, .ui-datepicker-trigger').on('click', function () {
        $('.appendDatepicker').addClass('open');
    });
});

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

