'use strict'

console.log(typeof 5);
console.log(typeof true);
console.log(typeof undefined);
console.log(typeof null); 
// object と表示されるのはjsのバグ

console.log('5' * 3);
console.log('5' - 3);
//+ は文字列の結合とみなされる
console.log('5' + 3);
//10pに変換
console.log(parseInt('5',10) + 3);

const price = 1324234;
console.log(price === 100);
console.log(price !== 100);

//falce 0,null,undefined,'',false
//true  without falce

//js にも三項演算子がある

//文字列に変数の埋め込み

let i = 100;
console.log(`hello ${i}`);

//引数
function showAd(){
  console.log('Hello');
}
//引数がなかったときようの設定もできる
function showAd2(message = 'Ad'){
  console.log(`!!!!${message}!!!!!`);
}

showAd();
showAd2();
showAd2('wwwww');

//関数式
// const sum = function(a, b, c) {
//   return a + b + c;
// };
//アロー関数 処理がreturnのとき
const sum = (a, b, c) => a + b + c;
const mult = a => a * 5;
const total = sum(1, 2, 3) + sum(3, 4, 5);
console.log(total);
console.log(mult(5));

//scriptをわけてもスコープは分かれない
//そのため、{}でかこってやる必要がある。例えば

{
  const x=100;
  console.log(x);
}

//vector
{
  const othersocres = [-20,-10];
  const scores = [10,20,30,40,...othersocres];
  scores.push(50,60);
  scores.shift();
  for(let i in scores){
    console.log(scores[i]);
  }

  //swap
  let x = 30;
  let y = 70;
  [x,y] = [y,x];
  console.log(x);
  console.log(y);


  //配列のすべての要素に対して処理を実行する
  scores.forEach((score,index) => {
    console.log(`Score ${index}: ${score}`)
  });

  //配列に処理を行ったあとで結果を別の配列
  const updatescores = scores.map(score => score + 1000);
  console.log(updatescores);

  //配列の要素のうち条件に合うものだけを抽出して別の配列
  const kazu = [1,4,7,8,10];

  const evenkazu = kazu.filter(number => number%2 ===0);
  console.log(evenkazu);
}
{
  //オブジェクトを構成するプロパティの扱い方
  //[]は配列 {}はオブジェクト
  // const point = {
  //   x: 100,
  //   y: 120,
  // };

  // point.x = 200;
  // console.log(point.x);

  // point.z = 50;
  // delete point.y;
  // console.log(point);
}
  
{
  //オブジェクトも配列と似た感じで
  const otherprop = {
    r: 4,
    color: 'red'
  };

  const point = {
    x:200,
    z:50,
    ...otherprop,
  };

  console.log(point);

  const {x,r, ...values} = point;
  console.log(x);
  console.log(r);
  console.log(values);
}

{
  const point = {
    x:100,
    y:180,
  };
//objuctのkeyを配列で取得
  const keys = Object.keys(point);
  keys.forEach(key => {
    console.log(`Key: ${key} Value: ${point[key]}`);
  });

  const points = [
    {x: 30, y: 20},
    {x: 10, y: 50},
    {x: 40, y: 40},
  ];
  console.log(points[1].y);
}
{
  //配列のコピーはアドレスを渡すのでコピーしたいときは次のようにわたす。
  let x=[1,3];
  let y=x;
  let z=[...x];
  x[1]=100;
  console.log(y);
  console.log(z);

  //配列の分割
  const d =[2021,11,23];
  console.log(d.join('/'));

  const t ='14:03:21';
  console.log(t.split(':'));

  //乱数
  console.log(Math.random());

  //1~10
  console.log(Math.floor(Math.random()*9)+1);
}

{
  //日時を取得
  const d = new Date();
  console.log(d);
  console.log(`${d.getMonth()+1}/${d.getDate()}`);
  console.log(d.getTime()); //絶対時間
}

{
  //特定の日時を取得
  const d = new Date(2021,10); // 2021/11/01/ 00:00:00

  d.setHours(10,20,30); // 2021/11/01/ 10:20:30
  d.setDate(d.getDate()+3); // 2021/11/04/
  console.log(d);
}

{
  //指定した時間ごとに処理を実行
  let i = 0;

  function showTime() {
    console.log(new Date());
    i++;
    if (i > 2) {
      clearInterval(intervalId);
    }
  }

  const intervalId = setInterval(showTime, 1000);
}

{
  //指定した時間後に処理を実行
  //Intervalよりこっちを使う
  let i = 0;

  function showTime() {
    console.log(new Date());
    const timeoutId = setTimeout(showTime, 1000);
    i++;
    if (i > 2) {
      clearTimeout(timeoutId);
    }
  }

  showTime();
}

{
  //例外処理
  // const name = 'taguchi';
  const name = 5;

  try {
    console.log(name.toUpperCase());
  } catch (e) {
    console.log(e);
  }

  console.log('Finish!');
}
// クラス内の関数をメソッドと呼ぶ
//プロパティやメソッドを纏めたテンプレートをクラスと呼ぶ。クラスから生成されるものをインスタンスと呼ぶ。
// e.g.
{
  class Post{ //親クラス
    constructor(text){ //initialization
      this.text = text;
      this.likecout = 0;
    }

    //動的メソッド
    show(){
      console.log(`${this.text} - ${this.likecout}いいね`);
    }

    //静的メソッド
    //インスタンスを作成しないのでthis は使えない
    static showInfo(){
      console.log('version 114.514');
    }

    like(){
      this.likecout++;
      this.show();
    }
  }
  //クラスの継承
  class SponsoredPost extends Post { // 子クラス
    constructor(text, sponsor) {
      super(text); //thisを使うために必要
      this.sponsor = sponsor;
    }

    show() {
      super.show();
      console.log(`... sponsored by ${this.sponsor}`);
    }
  }

  const posts = [
    new Post('programing stading'),
    new Post('sleeping now'),
    new SponsoredPost('宇宙人撃退祈願', 'kokako-ra'),
  ];

  posts[0].show();
  posts[1].show();
  posts[2].show();
  Post.showInfo();
}



