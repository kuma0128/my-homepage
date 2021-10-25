<?php
$title = '';
include('./app/_header.php');
?>

  <!-- </figure> -->
  <p class="gree"><?= h($message) ?></p>
  
  <h1 id="target" data-translation="About Me">自己紹介</h1>
  <p>あー、妙西です。色々やります多趣味です。好きなものは、綺麗なものと儚いもの。<br>更新頻度は月２くらい（たぶん）、指摘等ありましたら下記のメール欄からお知らせください。</p>

  <section class="works">
    <h1 id="mokuji" data-translation="Index">目次</h1>
    <div class="container">
      <section>
        <div class="flex">
          <figure class="image">
            <img src="img/kobun.png" width="200">
          </figure>
          <div class="info">
            <p class="title"><h1><a href="dogramagra.php">古文の現代語訳</a></h1></p>
            <p class="text">
              <a href="https://www.aozora.gr.jp/cards/000096/files/2093_28841.html" target="_blank" >青黛山如月寺縁起</a>を現代語訳<br>
              平安から昭和初期まで広く書きたいよー
            </p>
          </div>
        </div>
      </section>

      <section>
        <div class="flex">
          <figure class="image">
            <img src="img/program.png" width="220">
          </figure>
          <div class="info">
            <p class="title"><h1><a href="">プログラミング雑記（準備中）</a></h1></p>
            <p>数値計算からWeb開発まで　<br>半分備忘録みたいな感じかなー</p>
          </div>
        </div>
      </section>

      <section>
        <div class="flex">
          <figure class="image">
            <img src="img/app.png" width="160">
          </figure>
          <div class="info">
            <p><h1><a href="">アプリ紹介（準備中）</a></h1></p>
            <p>作ったAndroidアプリとウェブアプリを紹介したいが時間が、、
            </p>
          </div>
        </div>
      </section>

      <section>
        <div class="flex">
          <figure class="image">
            <img src="img/poem.jpg" width="220">
          </figure>
          <div class="info">
            <p><h1><a href="">好きな詩紹介（準備中）</a></h1></p>
            <p>昭和の詩が多いです。特に</p>
          </div>
        </div>
      </section>

      <section>
        <div class="flex">
          <figure class="image">
            <img src="img/day.png" width="160">
          </figure>
          <div class="info">
            <p><h1><a href="">日記（準備中）</a></h1></p>
            <p>そのままです。何か面白いことあったら書きます。</p>
          </div>
        </div>
      </section>
    </div>
  </section>

  <div class="ma">
    <h1><a href="mail.php">問い合わせ</a></h1>
  </div>

  <div id="clock">
    <p id="item"></p>
  </div>

  <script src="js/main.js"></script>
  
  <form action="https://google.com/search">
    <input type="text" name="q">
    <input type="submit" value="Google Search">
  </form>
  </body>
<?php
include('./app/_footer.php');
