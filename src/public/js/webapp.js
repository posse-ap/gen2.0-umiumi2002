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


