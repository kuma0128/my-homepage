'use strict';

let clicked = false; 
let flag = false;

for (let i = 0 ; i < 1 ; i++){
  const div = document.createElement('div');
  const time_par = document.getElementById('timep');
  div.classList.add('btn');
  div.textContent = 'PUSH ME';
  
  div.addEventListener('click', () => {

    // setTimeout(function () {
    //   clicked = true;
    //   if (flag) {
    //       alert("single click!");
    //   }
    //   clicked = false;
    // }, 300);

    if(!clicked){  
      div.classList.toggle('circle');
      div.textContent = 'You lose!';
      alert("不用意に押しちゃだめだよ。");
      clicked = true;

      const targetNode = document.getElementById('target');
      const mokujiNode = document.getElementById('mokuji');
      targetNode.textContent = targetNode.dataset.translation;
      mokujiNode.textContent = mokujiNode.dataset.translation;

      document.querySelectorAll('p')[1].innerText = 
      'LUIkJwx+51lR5WZIvGP6+U8MwBCXT6+S8L9OYNLOzpY6nAVXMZ++XQmBDJy3quQo9DRh4sIxn9irm\n35TM9x3jNZOxZMooUXI5qQaz6+jSM0qSfGQenEqli8JoibDjJpEDV0eh/FlbSZSjVEh/pFPApgMZkMfwZprf\ncYY41HEufDCltx+93pgerWRyoMfFsozEIf16CpEq3D+SI9W3K+0pCnceh5X4rDBlTGjKDcrq2Ou5Y9SjLkZ\ndHokynMu+omxsIWonISqkvFzM/aF0itkaEzepDi9crt5FAdHXttZn5K3K0mkEVz5uPOKqjK0Nx2TayfYSrjOb\nw5eJeeZuSsaoCtJxZ3OYivCy/xu7+q8i/HbWXKJZz23gn+QC19mKoyEwGiiE0BZdHepNlFj36/+UjHgMOAJ\npxBM/BYEDVYdIZalKGgUIYsQA=='
    }else
    {
      div.classList.toggle('circle');
      div.textContent = 'PUSH ME!';
      alert("It is no use crying over spilt milk.");
      clicked = false;
    }
  });

  // div.addEventListener('dblclick', () => {
  //   const answer = confirm('実行しますか？');
  //     if(answer){
  //       console.log("I'm behind you now")
  //     } else {
  //       console.log('Nice job');
  //     }
  // });
  // document.body.appendChild(div);
  time_par.appendChild(div);
}

{
  function update(){
    //id属性があるとき
    document.getElementById('mokuji').textContent = '目録';
    //ないとき
    // document.querySelector('h1').textContent = 'AAAAA';
    //これだと最初のh1しか作用しない。querySelectorAllですべて反映する
    //配列のように特定番目のタグを指定することもできる
    // document.querySelectorAll('h1')[0].textContent = 'About Me'
  }
  setTimeout(update, 1000);
  //animationと共存は難しい？
  const item = document.getElementById('item');
  function update2(){
  let today = new Date();
  item.innerHTML = today.toLocaleString("ja");
  window.requestAnimationFrame(update2);
  };
  update2();
  
}



