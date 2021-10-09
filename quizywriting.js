'use strict';

let choices = new Array();
choices.push['たかなわ', 'たかわ', 'こうわ'];
choices.push['かめいど', 'かめど', 'かめと'];
choices.push['こうじまち', 'かゆまち', 'おかとまち'];

function aaa(questionId, selectionId, validId) {

    let contents = `<h1>${questionId}.この地名は何て読む？</h1>
    <img src="img/photo${questionId}.png" alt="問題写真">`

    selectionId.forEach(function (selection, index) {
        contents += ` <li id="answer${questionId}-${index + 1}" onclick ="clickfunction(${questionId},${index + 1},${validId})">${selection}</li>`
    });

    contents += `<span class="answerbox" id="anserbox-${questionId}"></span>
    <span id='correct'>正解！</span>
    <span id='incorrect'>不正解！</span>
    <span>正解は「${selectionId[validId - 1]}」です！</span>`;

    document.getElementById('main').insertAdjacentHTML('beforeend', contents);
}


function shuffle() {
    choices.forEach(function (question, index) {
        answer = question[0];
        for (let i = question.length - 1; i > 0; i--) {
            let r = Math.floor(Math.random() * (i + 1));
            let tmp = question[i];
            question[i] = question[r];
            question[r] = tmp;
        }
        aaa(index + 1, question, question.indexOf(answer));
        console.log('aaaaaaa');
    });
}
shuffle();



function clickfunction(questionId, selectionId, validId) {
    let answerlists = document.getElementById(`answer${questionId}-${index + 1}`);
    answerlists.forEach(answerlist => {
        answerlist.style.pointerEvents = 'none';
    });

    let answerbox = document.getElementById('anserbox' + questionId);
    if (selectionId === validId) {
        document.getElementById('correct').style.display = 'block';
        document.getElementById('correct').className = 'correctbox'
        document.getElementById('incorrect').style.display = 'none';

    } else {
        document.getElementById('correct').style.display = 'none';
        document.getElementById('incorrect').style.display = 'block';
        document.getElementById('incorrect').className = 'incorrectbox'
    }
    answerbox.style.display = 'block';
}


