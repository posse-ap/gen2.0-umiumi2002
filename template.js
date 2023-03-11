'use strict';

// アプリの起動
Vue.createApp({
  // ↑↑↑メソッド
  data: function() {
    return{
      message: 'みなさaaaんこんにちは'
    };
  }
}).mount('#app');
  //  ↑↑↑メソッド

// 属性値にJs式を埋め込む  
Vue.createApp({
  // ↑↑↑メソッド
  data: function() {
    return{
      url: 'https://github.com/posse-ap/gen2.0-umiumi2002/tree/ph4-vue.js'
    };
  }
}).mount('#url');