<?php
//読み込み失敗で処理を止める
$path="http://localhost:8080";
require(__DIR__ . '/func.php');
?>
<!DOCTYPE html>

<html lang="ja">
<head>
  <meta http-equiv="content-type" charset="utf-8">
  <title><?= htmlspecialchars($title, ENT_QUOTES,'UTF-8'); ?> 妙西日記</title>
  <meta name="author" content="taipe">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-196640671-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-196640671-2');
  </script>
  <!-- memo -->
  <link rel="stylesheet" href=<?php echo $path . "/css/styles.css"?>>
  <link rel="stylesheet" href=<?php echo $path . "/css/box.css"?>>
  <link rel="icon" href=<?php echo $path . "/favicon.ico"?>>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
</head>

<body>
  <header>
    <div class="box">
      <img src=<?php echo $path . "/banner.webp"?> width="100%" height="200" alt="たえにしにっきのロゴです"> 
      <div class="text">妙西日記</div>
    </div>
    <nav>
      <ul>
        <li><a href=<?php echo $path . "/index.php"?>>TOP</a></li>
        <li><a href=<?php echo $path . "/literaryhome.php"?>>LITERATURE</a></li>
        <li><a href=<?php echo $path . "/codehome.php"?>>PROGRAMING</a></li>
        <li><a href=<?php echo $path . "/dayshome.php"?>>DAILY</a></li>
        <li><a href=<?php echo $path . "/mail.php"?>>CONTACT</a></li>
      </ul>
    </nav>
  </header>