'use strict';

const choices = [
    ["たかなわ","たかわ","こうわ"],
    ["かめいど","かめど","かめと"],
    ["こうじまち","かゆまち","おかとまち"],
    ["おなりもん","おかどもん","ごせいもん"],
    ["とどろき","たたら","たたりき"],
    ["しゃくじい","せきこうい","いじい"],
    ["ぞうしき","ざっしょく","ざっしき"],
    ["おかちまち","みとちょう","ごしろちょう"],
    ["ししぼね","しこね","ろっこつ"],
    ["こぐれ","こばく","こしゃく"],
];

let bigDiv = document.createElement('div');
bigDiv.id = `big-div${i}`;
bigDiv.classList.add("container");
document.body.appendChild(bigDiv);

let quizTitle = document.createElement('h1');
quizTitle.innerHTML = `${i + 1}.この地名は何と読む？`;
quizTitle.classList.add("question");
bigDiv.appendChild(quizTitle);

let imageDiv = document.createElement('div');
imageDiv.classList.add("image");
bigDiv.appendChild(imageDiv);

let kuizyImage = document.createElement('img');
kuizyImage.src = `./img/photo${i}.png`;
imageDiv.appendChild(kuizyImage);

let selects = document.createElement('array');
bigDiv.appendChild(selects);
// selects.innerHTML = 
// for文にすることで選択肢を増やしても減らしても作動する
for(let j = 0; j<choices.length; j++){
    for(let k = 0; k <choices[0].length; k++){
        System.out.println(choices[j][k]);
    }
}






    




















document.getElementById('correct').addEventListener('click',() =>{
    document.getElementById('correct').classList.add('correctchoice');
    document.getElementById('correct').classList.add('cantclick');
    document.getElementById('incorrect1').classList.add('cantclick');
    document.getElementById('incorrect2').classList.add('cantclick');
    document.getElementById('resultbox1').style.display='block';
})

document.getElementById('incorrect1').addEventListener('click', () => {
    document.getElementById("incorrect1").classList.add("incorrectchoice");
    document.getElementById("correct").classList.add("correctchoice");
    document.getElementById("correct").classList.add("cantclick");
    document.getElementById("incorrect1").classList.add("cantclick");
    document.getElementById("incorrect2").classList.add("cantclick");
    document.getElementById('resultbox2').style.display='block';
})   

document.getElementById('incorrect2').addEventListener('click', () => {
    document.getElementById("incorrect2").classList.add("incorrectchoice");
    document.getElementById("correct").classList.add("correctchoice");
    document.getElementById("correct").classList.add("cantclick");
    document.getElementById("incorrect1").classList.add("cantclick");
    document.getElementById("incorrect2").classList.add("cantclick");
    document.getElementById('resultbox2').style.display='block';
})
