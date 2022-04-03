<?php
$main = 'Timed out waiting for deviceのエラーについて';
$title =  $main.' - ';
include('./../app/_header.php');
?>
<link rel="stylesheet" href=<?php echo $path . "/css/dogma.css"?>>

<main>
    <h1 class="title"><?php echo $main ?></h1>
    <br>
    <p class="box2">
    OSは起動時に/etc/fstabというファイルを読み込み、
    bootファイルから外部HDDまでマウントを実行する。<br>
    ファイル内でデバイスをdev_mapper_data等名前で指定することが多いが、
    再起動時にデバイス名がディスクの認識順によって入れ替わる可能性がある。
    （とりわけHDDの増設はこれに敏感である）<br>つまり、
    違うディスクにマウントされ、マシンエラーがおこるのだ。<br>
    この症状はデバイス名の代わりに一意のUUIDを指定することで正しくOSが認識してくれる。
    <br>UUIDは以下のコマンドで確認できる。
    </p>
    <pre class="code bash"><code>
        blkid
    </code></pre>
</main>

<?php
include('./../app/_footer.php');