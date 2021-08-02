'use strict';

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
