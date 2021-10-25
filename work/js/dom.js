'use strict';

{
  //要素の追加
  document.querySelector('button').addEventListener('click', () => {
    //1.li要素を作る
    const item3 = document.createElement('li');
    //2.中身のテキスト設定
    item3.textContent = 'item 3';
    //コンテンツのコピー  
    const item0 = document.querySelectorAll('li')[0];
    const copy = item0.cloneNode(true);

    // DOMtree に追加
    const ul = document.querySelector('ul');
    //ulの子要素の末尾に追加
    ul.appendChild(item3);
    //item2の前に追加
    const item2 = document.querySelectorAll('li')[2];
    ul.insertBefore(copy,item2);

    //要素の削除
    const item1 = document.querySelectorAll('li')[1];
    document.querySelector('ul').removeChild(item1);
  });

  document.querySelectorAll('button')[1].addEventListener('click',() =>{
    const li = document.createElement('li');
    const text = document.querySelector('input');
    li.textContent = text.value;
    document.querySelectorAll('ul')[1].appendChild(li);

    text.value = '';//入力欄をクリア
    text.focus(); //入力欄にフォーカス
  });
//セレクトボックス
  document.querySelectorAll('button')[2].addEventListener('click', () =>{
    const li = document.createElement('li');
    const color = document.querySelector('select');
    li.textContent = `${color.value} - ${color.selectedIndex}`;
    document.querySelectorAll('ul')[2].appendChild(li);
  });
//ラジオボタン
  document.querySelectorAll('button')[3].addEventListener('click', () => {
    const colors = document.querySelectorAll('input');
    let selectedColor;

    colors.forEach(color => { //colorはcolorsの要素の一つ
      if (color.checked === true) {
        selectedColor = color.value;
        const button = document.querySelector(`input[value=${selectedColor}]`);
    button.checked = false;
      }
    });

    const li = document.createElement('li');
    li.textContent = selectedColor;
    document.querySelectorAll('ul')[3].appendChild(li);
  });

  //checkbox
  document.querySelectorAll('button')[4].addEventListener('click',() => {
    const colors = document.querySelectorAll('input');
    let selectedColors = []; 

    colors.forEach(color => {
      if(color.checked === true){
        selectedColors.push(color.value);
      }
    });

    const li = document.createElement('li');
    li.textContent = selectedColors;
    document.querySelectorAll('ul')[4].appendChild(li);
  });

  //マウスの座標 左上原点
  document.addEventListener('mousemove',e => {
    // console.log(e.clientX,e.clientY);
  });

  document.addEventListener('keydown', e => {
    console.log(e.key);
  });
}

{
  const text = document.querySelector('textarea');

  // text.addEventListener('focus', () => {
  //   console.log('focus');
  // });
//focusが外れた時
  // text.addEventListener('blur', () => {
  //   console.log('blur');
  // });
//
  text.addEventListener('input', () => {
    // console.log('input');
    console.log(text.value.length);
  });

  text.addEventListener('change', () => {
    console.log('change');
  });

  // if ('speechSynthesis' in window) {
  //   alert("このブラウザは音声合成に対応しています。🎉")
  // } else {
  //   alert("このブラウザは音声合成に対応していません。😭")
  // }
  // 発言を作成
  const uttr = new SpeechSynthesisUtterance("Hello World!")
  // 発言を再生 (発言キューに発言を追加)
  speechSynthesis.speak(uttr)
  
}