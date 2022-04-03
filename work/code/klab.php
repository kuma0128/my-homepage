<?php
$main = 'Klab Server Side Campの開発環境をゼロから構築する';
$title =  $main.' - ';
include('./../app/_header.php');
?>
<link rel="stylesheet" href=<?php echo $path . "/css/dogma.css"?>>

<main>
    <h1 class="title"><?php echo $main ?></h1>
    <br>
    <p class="box2">
    先日、KlabさんのServer Side Campインターンに参加した記事を書きました。<br>
    インターンでは、Codespacesを使用したため、各々環境構築をする必要はなかったんですが、
    インターンが終わった後も少しだけいじりたかったので、この記事を書くことになりました。<br>
    因みに、Codespacesの個人利用の申請は、時間がかなりかかるみたいなので、諦めてDockerを
    入れて環境構築をすることになりました。<br>
    私はWeb開発ツールの使用経験が全然なかったので、少し環境構築に
    手間取りました。少々冗長な記述もあると思います。Pythonで数値計算しかしたことないよ、みたいな
    人に参考になればなと思います。ただ、やってみると結構簡単です。
    <br>
    <br>
    では、さっそく手順を説明していきます。<br>
    まずは、Microsoft storeか適当なサイトからUbuntuをインストールします。<br>
    インストールしたら、以下のコマンドを入力。<br>
    </p>
    <pre class="code bash"><code>
        sudo apt update
        sudo apt upgrade
    </code></pre>
    <p class="box2">
    次にDockerのインストールです。以下のサイトからWindows版をダウンロード。<br>
    <a href="https://www.docker.com/products/docker-desktop/" target="_blank">https://www.docker.com/products/docker-desktop/</a>
    </p>
    <p class="box2">
    Dockerの使用にはHyper-Vが必要なので、有効になっているかタスクマネージャーのCPU情報
    で確認します。デフォルトでは、有効になっているみたいです。    
    </p>
    <img src="../img/Klab1.png" width="600" height="300" style="display: block; margin: auto;">
    <p class="box2">
    DockerをインストールしているとConfigure画面がでますが、全部にチェックを入れます。
    </p>
    <img src="../img/Klab2.png" width="600" height="300" style="display: block; margin: auto;">
    <p class="box2">
    最後にWSL2ないけど？と言われるのでリンクを踏んでダウンロードします。
    </p>
    <img src="../img/Klab3.png" width="600" height="300" style="display: block; margin: auto;">
    <p class="box2">
    次にpowershellでwsl2を標準に設定します。
    <pre class="code shell"><code>
        wsl --set-default-version 2
    </code></pre>
    </p>
    <p class="box2">
    最後にUbuntuからdockerを使えるようにします。dockerの設定画面で画像の通りにします。
    </p>
    <img src="../img/Klab4.png" width="600" height="300" style="display: block; margin: auto;">
    <p class="box2">
    必要なアプリは以上です。vscodeを立ち上げ、ターミナルでUbuntuを開きます。<br>
    githubの自分のレポジトリをクローンして、リモートウィンドウ（New WSL Window)を開きます。
    <img src="../img/Klab7.png" width="600" height="300" style="display: block; margin: auto;">
    クローンしたフォルダを開くと、以下のようなポップアップが出るので、Reopenしてください。<br>
    するとvscodeの別窓が出ます。ここで作業していくことになります。
    </p>
    <img src="../img/Klab5.png" width="600" height="300" style="display: block; margin: auto;">
    <p class="box2">
    開発に必要な拡張機能やPythonのインストールはvscodeが.devcontainerを読み込んで勝手に行ってくれます。
    vscodeによる立ち上げが終わったら、requirement.txtに書いてある外部ライブラリをinstallして環境構築完了です。<br>
    お疲れ様でした。
    <pre class="code bash"><code>
        pip install -r requirements.txt
    </code></pre>
    </p>
    <img src="../img/Klab6.png" width="600" height="300" style="display: block; margin: auto;">
</main>

<?php
include('./../app/_footer.php');