"use strict";

// const canvas = document.getElementById("myCanvas");
// const ctx = canvas.getContext("2d");

// function setup() {}

// class Vec2 {
//   constructor(_x, _y) {
//     this.x = _x;
//     this.y = _y;
//   }
//   // このベクトルと、引数のベクトルbの和を計算する
//   add(b) {
//     let a = this;
//     // thisは関数の持ち主
//     return new Vec2(a.x + b.x, a.y + b.y);
//   }
//   // このベクトルを実数s倍したベクトルを計算する
//   mul(s) {
//     let a = this;
//     return new Vec2(s * a.x, s * a.y);
//   }
// }

// class Ball {
//   constructor(_p, _v, _r) {
//     this.p = _p; //ボールの中心の位置ベクトル
//     this.v = _v; //ボールの速度ベクトル
//     this.r = _r; //ボールの半径
//   }
// }

// class Block {
//   constructor(_p, _w, _h) {
//     this.p = _p; //位置ベクトル
//     this.w = _w; //幅
//     this.h = _h; //高さ
//   }
// }

// let ball = new Ball(
//   new Vec2(240, 300),
//   //位置ベクトル
//   new Vec2(20, -20),
//   //速度ベクトル
//   10
//   //半径
// );

// var brickRowCount = 5;
// var brickColumnCount = 3;
// var brickPadding = 10;
// var brickOffsetTop = 30;
// var brickOffsetLeft = 30;
// let blocks = [];

// for (var c = 0; c < brickColumnCount; c++) {
//   blocks[c] = [];
//   for (var r = 0; r < brickRowCount; r++) {
//     blocks[c][r] = { x: 0, y: 0, status: 1 };
//   }
// }

// function draw() {
//   ctx.clearRect(0, 0, canvas.width, canvas.height);

//   ball.p = ball.p.add(ball.v.mul(1 / 60));

//   if (ball.p.x > canvas.width - ball.r || ball.p.x < ball.r) {
//     ball.v.x = -ball.v.x;
//   }
//   if (ball.p.y < ball.r) {
//     ball.v.y = -ball.v.y;
//   }

//   //衝突判定
//   for (let block of blocks){
//     if (
//       ball.p.x > block.x &&
//       ball.p.x < block.x + block.w &&
//       ball.p.y > block.y &&
//       ball.p.y < block.y + block.h
//     ) {
//       ball.v = new Vec2(0, 50);
//     }
//   }

//   //ボール
//   ctx.beginPath();
//   ctx.arc(ball.p.x, ball.p.y, ball.r, 0, Math.PI * 2);
//   ctx.fillStyle = "#FF0000";
//   ctx.fill();
//   ctx.closePath();

//   //ブロック
//   for (var c = 0; c < brickColumnCount; c++) {
//     for (var r = 0; r < brickRowCount; r++) {
//       if (blocks[c][r].status == 1) {
//         console.log(blocks[c][r]);
//         var brickX = r * (blocks[c][r].w + brickPadding) + brickOffsetLeft;
//         var brickY = c * (blocks[c][r].h + brickPadding) + brickOffsetTop;
//         blocks[c][r].x = brickX;
//         blocks[c][r].y = brickY;
//         ctx.beginPath();
//         ctx.rect(brickX, brickY, blocks.w, blocks.h);
//         ctx.fillStyle = "#0095DD";
//         ctx.fill();
//         ctx.closePath();
//       }
//     }
//   }
// }
// const interval = setInterval(draw, 1);



// ryuichi
// function setup() {
//   createCanvas(400, 400);
//   let min_ball_number = 12;
//   let max_ball_number = 12;
//   let ball_number =
//     Math.random() * (max_ball_number - min_ball_number) + min_ball_number;
//   for (let i = 0; i < ball_number; i++) {
//     let p = new Vec2(90 * (i % 3) + 50, 50 * floor(i / 3) + 300);
//     let v = new Vec2(720, -180);
//     balls.push(new Ball(p, v, 15));
//   }
//   block_number = 12;
//   for (let i = 0; i < block_number; i++) {
//     let p = new Vec2(90 * (i % 4) + 50, 50 * floor(i / 4) + 50);
//     blocks.push(new Block(p, 20));
//   }
// }

// class Vec2 {
//   constructor(_x, _y) {
//     this.x = _x;
//     this.y = _y;
//   }
//   add(b) {
//     let a = this;
//     return new Vec2(a.x + b.x, a.y + b.y);
//   }
//   mul(s) {
//     let a = this;
//     return new Vec2(s * a.x, s * a.y);
//   }
//   mag() {
//     let a = this;
//     return sqrt(a.x ** 2 + a.y ** 2);
//   }
//   sub(b) {
//     let a = this;
//     return new Vec2(a.x - b.x, a.y - b.y);
//   }
//   norm() {
//     let a = this;
//     return a.mul(1 / a.mag());
//   }
//   dot(b) {
//     let a = this;
//     return a.x * b.x + a.y * b.y;
//   }
//   reflect(w) {
//     let v = this;
//     let cosTheta = v.mul(-1).dot(w) / (v.mul(-1).mag() * w.mag());
//     let n = w.norm().mul(v.mag() * cosTheta);
//     let r = v.add(n.mul(2));
//     return r;
//   }
// }

// class Ball {
//   constructor(_p, _v, _r) {
//     this.p = _p;
//     this.v = _v;
//     this.r = _r;
//   }
// }

// class Block {
//   constructor(_p, _r) {
//     this.p = _p;
//     this.r = _r;
//   }
// }
// class Paddle {
//   constructor(_p, _r) {
//     this.p = _p;
//     this.r = _r;
//   }
// }

// let balls = [];

// let blocks = [];

// let paddle = new Paddle(new Vec2(200, 320), 30);

// function draw() {
  // for (let ball of balls) {
  //   ball.p = ball.p.add(ball.v.mul(1 / 60));

  //   if (ball.p.x > 385 || ball.p.x < 15) {
  //     ball.v.x *= -1;
  //   }

  //   if (ball.p.y > 385 || ball.p.y < 15) {
  //     ball.v.y *= -1;
  //   }

  //   for (let block of blocks) {
  //     let d = block.p.sub(ball.p).mag();
  //     if (d < ball.r + block.r) {
  //       let w = ball.p.sub(block.p);
  //       let r = ball.v.reflect(w);
  //       ball.v = r;
  //       blocks.splice(blocks.indexOf(block), 1);
  //       if (blocks.length == 0) {
  //         balls = [];
  //       }
  //     }
  //   }

  //   let d = paddle.p.sub(ball.p).mag();
  //   if (d < ball.r + paddle.r) {
  //     let w = ball.p.sub(paddle.p);
  //     let r = ball.v.reflect(w);
  //     ball.v = r;
  //     ball.p = paddle.p.add(w.norm().mul(ball.r + paddle.r));
  //   }
  // }
  // paddle.p.x = mouseX;

  // background(220);
  // for (let ball of balls) {
  //   circle(ball.p.x, ball.p.y, 2 * ball.r);
  // }
  // for (let b of blocks) {
  //   circle(b.p.x, b.p.y, 2 * b.r);
  // }
  // circle(paddle.p.x, paddle.p.y, 2 * paddle.r);
// }