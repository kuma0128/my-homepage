<?php
$title =  'ゲーミングPC自作 - ';
include('./../app/_header.php');
?>
<link rel="stylesheet" href=<?php echo $path . "/css/dogma.css"?>>

<main>
    <h1 class="title">ゲーミングPC自作</h1>
    <br>
    <p class="box2">
    ３年前に買ったPCが壊れたのでパーツを交換したよ。起動してしばらく経つとフリーズして、ブルースクリーンとグリーンスクリーンが何度も出る始末。。<br>
    ハードディスクが完全に故障してデータが吹き飛ぶ前にささっとパーツを交換したぜ。
    </p>
    <img src="../img/DSC_0323.JPG" width="600" height="300" style="display: block; margin: auto;">
    <figcaption style="text-align:center">目に優しいグリーンスクリーン！！</figcaption>
    <br>
    <p class="box2">
    当時はPCパーツに無知だったから適当に選んで買ってたんだけど、ふたを開けて見れば、故障原因が一目瞭然！<br>
    Cドライブに中華製のSSD、しかもSATA接続のものを使っていたからだった。事態が急を要するので、アマゾンで1TBのm.2 SSDを購入。ついでにヒートシンクとドライブーも購入。
    </p>
    <img src="../img/20210513_103454.jpg" width="600" height="300" style="display: block; margin: auto;">
    <figcaption style="text-align:center">SSDとヒートシンク！！</figcaption>
    <p class="box2">
    HDDもハードウェア評価したら半分故障していたので、初期化してメルカリでジャンクとして売ることに。(2000円で売れました)<br>
    ハードウェア評価の仕方は知らないとなかなか難しいと思うので、一応ここで説明してあげる。<br>
    powershellを管理者権限で起動して、以下のコマンドを実行！
    </p>
    <pre class="code shell"><code>
        Get-CimInstance Win32_WinSat
    </code></pre>
    <p class="box2">
    するとスコアが出てくるのでDisk Scoreの値をみる。10点満点で、体感だと７以下だと結構やばいイメージがあるからPCの調子が悪いなと感じたらこのコマンドを実行してみよう。<br>
    下の写真はHDDを初期化してる風景。いっぱい初期化の方式があるみたいだけど今回はロシア式を採用してみた。これが結構時間かかる。二時間くらいだったかな。
    </p>
    <img src="../img/DSC_0289.JPG" width="600" height="300" style="display: block; margin: auto;">
    <figcaption style="text-align:center">HDD初期化の風景</figcaption>
    <p class="box2">
    グラボも1080から3060に交換して、電源も少し強めのものに交換した。自作PCはグラボの取り付けが一番難しいかもしれない。力がいるクセして、周りが精密機械地獄なので..
    </p>
    <img src="../img/DSC_0471.JPG" width="600" height="300" style="display: block; margin: auto;">
    <figcaption style="text-align:center">中身完成！</figcaption>
    <p class="box2">
        とりあえず完成して、PCを立てたらグラボが重すぎて下に少し傾いているではないか。。このままだと将来的に基盤がイカれる可能性が大なので、グラボを支える用の棒を探すことに。
        amazonで適当に調べたらちょうどそれ用の支えを発見w<br>取り付けはシールとかではなくて磁力で箱とくっついて支えるらしい。↓アフィリエイトじゃないです。
    </p>
    <div class="shopBox">
        <div class="shopBox_contents">
            <div class="shopBox_img shopBox_inner"><a target="_blank" href="https://www.amazon.co.jp/gp/product/B01LPO6KJO/ref=ppx_yo_dt_b_asin_title_o09_s02?ie=UTF8&psc=1" rel="noopener noreferrer"><img border="0" src="../img/616QvcX9-ML._AC_SL1500_.jpg" width="200px" height="300px"></a><img src="../img/616QvcX9-ML._AC_SL1500_.jpg" width="1" height="1" border="0" alt=""></div>
            <div class="shopBox_inner">
            <div class="shopBox_title"><a href="https://www.amazon.co.jp/gp/product/B01LPO6KJO/ref=ppx_yo_dt_b_asin_title_o09_s02?ie=UTF8&psc=1" target="_blank" rel="noopener noreferrer">VGAサポートステイSマグネット式 SS-NVGASTAY-S</a>
            <p>長尾製作所</p>
            </div>
            <ul class="shopBox_btn">
            <li class="shopBox_btn_item amazon"><a href="https://www.amazon.co.jp/gp/product/B01LPO6KJO/ref=ppx_yo_dt_b_asin_title_o09_s02?ie=UTF8&psc=1" target="_blank" rel="noopener noreferrer">Amazon</a></li>
            <li class="shopBox_btn_item rakuten"><a href="https://item.rakuten.co.jp/goodwill/m4s2p811819/?scid=af_pc_etc&sc2id=af_113_0_10001868&icm_agid=135083843412&gclid=CjwKCAjwrfCRBhAXEiwAnkmKmXcN5bzq51BdlT4jbzfIiCYRmJqRhLrYKFD9gpJvp9IkQTozMKGn4xoCtrMQAvD_BwE&icm_cid=15280804517&icm_acid=255-776-8501&iasid=wem_icbs_" target="_blank" rel="noopener noreferrer">楽天市場</a></li>
            </ul>
            </div>
        </div>
    </div>
    <img src="../img/DSC_0271.JPG" width="600" height="300" style="display: block; margin: auto;">
    <figcaption style="text-align:center">グラボを支えるやつ</figcaption>
    <p class="box2">
    完成したので、電源オンっ！！かっけーな（棒）<br>
    明るすぎて寝るとき目障りなのと、節電したいのでBIOSから光る設定をoffにした。gg
    </p>
    <video src="../img/MOV_0478.mp4" width="600" height="300" contrals autoplay loop muted playsinline style="display: block; margin: auto;"></video>
    <figcaption style="text-align:center">かっけー</figcaption>
    <p class="box2">
    これを機にデスク下の配線を整理することにした。とは言っても裏側に押し付けてるだけだが。<br>
    整理するときに重宝したグッズのamazonリンクを下にのっけるので気になったら購入してみて。
    </p>
    <div class="shopBox">
        <div class="shopBox_contents">
            <div class="shopBox_img shopBox_inner"><a target="_blank" href="https://www.amazon.co.jp/gp/product/B002YMLFUQ/ref=ppx_yo_dt_b_asin_title_o09_s01?ie=UTF8&psc=1" rel="noopener noreferrer"><img border="0" src="https://m.media-amazon.com/images/I/71banmV95WS._AC_SL1500_.jpg" width="200px" height="300px"></a><img src="https://m.media-amazon.com/images/I/71banmV95WS._AC_SL1500_.jpg" width="1" height="1" border="0" alt=""></div>
            <div class="shopBox_inner">
            <div class="shopBox_title"><a href="https://www.amazon.co.jp/gp/product/B002YMLFUQ/ref=ppx_yo_dt_b_asin_title_o09_s01?ie=UTF8&psc=1" target="_blank" rel="noopener noreferrer">VGAサポートステイSマグネット式 SS-NVGASTAY-S</a>
            <p>スリーエム</p>
            </div>
            <ul class="shopBox_btn">
            <li class="shopBox_btn_item amazon"><a href="https://www.amazon.co.jp/gp/product/B002YMLFUQ/ref=ppx_yo_dt_b_asin_title_o09_s01?ie=UTF8&psc=1" target="_blank" rel="noopener noreferrer">Amazon</a></li>
            </ul>
            </div>
        </div>
    </div>
    <div class="shopBox">
        <div class="shopBox_contents">
            <div class="shopBox_img shopBox_inner"><a target="_blank" href="https://www.amazon.co.jp/gp/product/B01LPO6KJO/ref=ppx_yo_dt_b_asin_title_o09_s02?ie=UTF8&psc=1" rel="noopener noreferrer"><img border="0" src="https://m.media-amazon.com/images/I/61c+3Gf9TNL._AC_SL1008_.jpg" width="200px" height="300px"></a><img src="https://m.media-amazon.com/images/I/61c+3Gf9TNL._AC_SL1008_.jpg" width="1" height="1" border="0" alt=""></div>
            <div class="shopBox_inner">
            <div class="shopBox_title"><a href="https://www.amazon.co.jp/gp/product/B01LPO6KJO/ref=ppx_yo_dt_b_asin_title_o09_s02?ie=UTF8&psc=1" target="_blank" rel="noopener noreferrer">ケーブルクリップ、MAVEEK(マビーカ)4階段調節可能なケーブルホルダー コードクリップ</a>
            <p>Maveek</p>
            </div>
            <ul class="shopBox_btn">
            <li class="shopBox_btn_item amazon"><a href="https://www.amazon.co.jp/gp/product/B01LPO6KJO/ref=ppx_yo_dt_b_asin_title_o09_s02?ie=UTF8&psc=1" target="_blank" rel="noopener noreferrer">Amazon</a></li>
            </ul>
            </div>
        </div>
    </div>
    <img src="../img/DSC_0272.JPG" width="600" height="300" style="display: block; margin: auto;">
    <figcaption style="text-align:center">配線整理した</figcaption>
    </p>
</main>

<?php
include('./../app/_footer.php');