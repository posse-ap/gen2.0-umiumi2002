'use strict';
let questionNumber;

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

for (let i = 0; i<10; i++){
let bigDiv = document.createElement('div');
bigDiv.id = `big-div${i}`;
bigDiv.classList.add("container");
document.body.appendChild(bigDiv);

let quizTitle = document.createElement('h1');
quizTitle.innerHTML = `${i + 1}.この地名は何と読む？`;
// quizTitle.innerHTML = `1.この地名は何と読む？`;
quizTitle.classList.add("question");
bigDiv.appendChild(quizTitle);

let imageDiv = document.createElement('div');
imageDiv.classList.add("image");
bigDiv.appendChild(imageDiv);

let kuizyImage = document.createElement('img');
kuizyImage.src = `./img/photo${i}.png`;
imageDiv.appendChild(kuizyImage);

let selects = document.createElement('ul');
bigDiv.appendChild(selects);
selects.classList.add("choice");
selects.innerHTML = 
` <li id="correct${i}" onclick ="clickfunction(${i})">${choices[i][0]}</li>`
+`<li id="incorrect1${i}" onclick ="clickfunction1(${i})">${choices[i][1]}</li>`
+`<li id="incorrect2${i}" onclick ="clickfunction2(${i})">${choices[i][2]}</li>`

let resultbox = document.createElement('p');
resultbox.classList.add("box");
resultbox.id=`resultbox1${i}`;
bigDiv.appendChild(resultbox);
resultbox.innerHTML =
`<span class="correctbox">正解！</span><br/><span class="font">正解は「`+choices[i][0]+`」です！</span>`
// `<span class="incorrect-line" id="">不正解！</span><br/><span class="font">正解は「`+choices[i][0]+`」です！</span>`

let resultbox2 = document.createElement('p');
resultbox2.classList.add("box");
resultbox2.id=`resultbox2${i}`;
bigDiv.appendChild(resultbox2);
resultbox2.innerHTML =
`<span class="incorrectbox" >不正解！</span><br/><span class="font">正解は「`+choices[i][0]+`」です！</span>`




// `<li>${choices[i][1]}</li>`
// `<li>${choices[i][2]}</li>`
// for文にすることで選択肢を増やしても減らしても作動する
// for(let j = 0; j<choices.length; j++){
//     for(let k = 0; k <choices[0].length; k++){
//         System.out.println(choices[j][k]);
//     }
// }
}

let clickfunction = function (questionNumber) {
    document.getElementById('correct'+questionNumber);
    document.getElementById('correct'+questionNumber).classList.add('correctchoice');
    document.getElementById('resultbox1'+questionNumber).style.display='block';
        document.getElementById('correct'+questionNumber).classList.add('cantclick');
        document.getElementById('incorrect1'+questionNumber).classList.add('cantclick');
        document.getElementById('incorrect2'+questionNumber).classList.add('cantclick');
    
    }
let clickfunction1 = function (questionNumber) {
    document.getElementById('incorrect1'+questionNumber);
    document.getElementById('incorrect1'+questionNumber).classList.add('incorrectchoice');
    document.getElementById('resultbox2'+questionNumber).style.display='block';
        document.getElementById('correct'+questionNumber).classList.add('cantclick');
        document.getElementById('incorrect1'+questionNumber).classList.add('cantclick');
        document.getElementById('incorrect2'+questionNumber).classList.add('cantclick');
    
    }
let clickfunction2 = function (questionNumber) {
    document.getElementById('incorrect2'+questionNumber);
    document.getElementById('incorrect2'+questionNumber).classList.add('incorrectchoice');
    document.getElementById('resultbox2'+questionNumber).style.display='block';
        document.getElementById('correct'+questionNumber).classList.add('cantclick');
        document.getElementById('incorrect1'+questionNumber).classList.add('cantclick');
        document.getElementById('incorrect2'+questionNumber).classList.add('cantclick');
    
    }


//取り出す範囲(箱の中)を末尾から狭める繰り返し
// for(j = choices.length -1;j>0;j--){
//     //乱数生成を使ってランダムに取り出す値を決める
//     r = Math.floor(Math.random()*(j+1));
//     //取り出した値と箱の外の先頭の値を交換する
//     tmp = choices[j];
//     choices[j] = choices[r];
//     choices[r] = tmp;    

// let clickfunction = function (questionNumber) {
// document.getElementById('incorrect1'+questionNumber);
//     document.getElementById("incorrect1+q").classList.add("incorrectchoice");
//     document.getElementById("correct").classList.add("correctchoice");
//     document.getElementById("correct").classList.add("cantclick");
//     document.getElementById("incorrect1").classList.add("cantclick");
//     document.getElementById("incorrect2").classList.add("cantclick");
//     document.getElementById('resultbox2').style.display='block';
// }

// document.getElementById('incorrect2').addEventListener('click', () => {
//     document.getElementById("incorrect2").classList.add("incorrectchoice");
//     document.getElementById("correct").classList.add("correctchoice");
//     document.getElementById("correct").classList.add("cantclick");
//     document.getElementById("incorrect1").classList.add("cantclick");
//     document.getElementById("incorrect2").classList.add("cantclick");
//     document.getElementById('resultbox2').style.display='block';
// })
