<?php

$n = mt_rand(1,3);

if ($n === 1){
  $message = 'こんにちは!';
} elseif ($n === 2){
  $message = 'おはようございます!';
} else {
  $message = 'こんばんは!';
}
?>
<!DOCTYPE html>

<html lang="ja">
<head>
  <meta http-equiv="content-type" charset="utf-8">
  <title><?= htmlspecialchars($title, ENT_QUOTES,'UTF-8'); ?> 妙西日記</title>
  <!-- <meta name="description" content="プログラミングと文学"> -->
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
<nav>
<ul>
   <li><a href="index.php">TOP</a></li>
   <li><a href="dogramagra.php">LITERATURE</a></li>
   <li><a href="code.php">PROGRAMING</a></li>
   <li><a href="days.php">DAILY</a></li>
   <li><a href="mail.php">CONTACT</a></li>
</ul>
</nav>
