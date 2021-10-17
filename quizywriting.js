'use strict';

let choices = new Array();
choices.push(['たかなわ', 'たかわ', 'こうわ']);
choices.push(['かめいど', 'かめど', 'かめと']);
choices.push(['こうじまち', 'かゆまち', 'おかとまち']);

function body(questionId, selectionId, validId) {
    let contents = `<h1 class="question">${questionId}.この地名は何て読む？</h1>
    <img class="image" src="./img/photo${questionId - 1}.png" alt="問題写真">`

    selectionId.forEach(function (selection, index) {
        contents += ` <li id="" name="answerlist-${questionId}" class="selectionbox" onclick ="clickfunction(${questionId},${index + 1},${validId})">${selection}</li>`
    });

    contents += `<span class="answerbox" id="anserbox-${questionId}">
    <span id='correct'>正解！</span>
    <span id='incorrect'>不正解！</span>
    <span>正解は「${selectionId[validId - 1]}」です！</span>
    </span>`;

    document.getElementById('main').insertAdjacentHTML('beforeend', contents);
}


function shuffle() {
    choices.forEach(function (question, index) {
        let answer = question[0];
        for (let i = question.length - 1; i > 0; i--) {
            let r = Math.floor(Math.random() * (i + 1));
            let tmp = question[i];
            question[i] = question[r];
            question[r] = tmp;
        }
        body(index + 1, question, question.indexOf(answer)+1);
    });
}
shuffle();



function clickfunction(questionId, selectionId, validId) {
    let answerlists = document.getElementsByName('answerlist-' + questionId);
    answerlists.forEach(answerlist => {
        answerlist.style.pointerEvents = 'none';
    });

    let answerbox = document.getElementById('anserbox-' + questionId); 
    
    if (selectionId === validId) {
        
        document.getElementById('correct').style.display = 'block';
        document.getElementById('correct').className = 'correctbox'
        document.getElementById('incorrect').style.display = 'none';

    } else {
        document.getElementById('correct').style.display = 'none';
        document.getElementById('incorrect').style.display = 'block';
        document.getElementById('incorrect').className = 'incorrectbox'
    }
    answerbox.style.display='block';
}


