<?php
//読み込み失敗で処理を止める
require(__DIR__ . '/func.php');

?>
<!DOCTYPE html>

<html lang="ja">
<head>
  <meta http-equiv="content-type" charset="utf-8">
  <title><?= htmlspecialchars($title, ENT_QUOTES,'UTF-8'); ?> 妙西日記</title>
  <!-- <meta name="description" content="プログラミングと文学"> -->
  <meta name="author" content="taipe">
  <meta name="DC.Title" content="ドグラ・マグラ" />
	<meta name="DC.Creator" content="夢野久作" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="favicon.ico">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-196640671-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-196640671-2');
  </script>
  <!-- memo -->
</head>

<body>
  <header>
  <!-- <figure> -->
    <div class="box">
      <!-- <div class="pic"> -->
        <img src="banner.webp" width="100%" height="200" alt="たえにしにっきのロゴです">
      <!-- </div> -->
      
      <div class="text">妙西日記</div>
      <!-- <figcaption class="decorator">妙西日記</figcaption> -->
    </div>
    <nav>
    <ul>
      <li><a href="index.php">TOP</a></li>
      <li><a href="dogramagra.php">LITERATURE</a></li>
      <li><a href="code.php">PROGRAMING</a></li>
      <li><a href="days.php">DAILY</a></li>
      <li><a href="mail.php">CONTACT</a></li>
      </ul>
    </nav>
  </header>