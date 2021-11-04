<?php
session_start();
$title = 'お問い合わせ - ';
include('./app/_header.php');//include func.php such as mailfunc.php

//クリックジャッキング対策
header('X-FRAME-OPTIONS: SAMEORIGIN');

// トークン生成
if (!isset($_SESSION['token'])) {
    $_SESSION['token'] = sha1(random_bytes(30));
}

?>
  <style>
    body{
      background: #b9c9d1;
    }
  </style>
  <link rel="stylesheet" href="css/mail.css">

<?php if( $mode == 'input' ){ ?>
    <!-- 入力画面 -->
    <?php
      if( $errmessage ){
        echo '<div style="color:red;">';
        echo implode('<br>', $errmessage );
        echo '</div>';
      }
    ?>
    <div class="mailbody">
      <h1>Contact Form</h1>
      <form action="mail.php" method="post" id="mailform">
      <!-- SESSIONで入力内容をサーバーに保存 -->
        <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" placeholder="名前" required><br>
        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="メール" required>
        <textarea cols="40" rows="8" name="message"  placeholder="メッセージ" required><?php echo $_SESSION['message'] ?></textarea>
        <input type="submit" name="confirm" value="確認" class="sendbtn">
      </form>
      <style>
        label, input[type=text]{
        display:block;
        }
      </style>
      <p>ちゃんと届くよ~</p>
    </div>
  <?php } else if( $mode == 'confirm' ){ ?>
    <div class="mailbody">
      <form action="./mail.php" method="post" id="mailform">
        <input type="hidden" name="token" value="<?php echo $_SESSION["token"]; ?>">
        <input type="text" name="fullname" value="<?php echo $_SESSION['fullname'] ?>" placeholder="名前" required><br>
        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" placeholder="メール" required>
        <textarea cols="40" rows="8" name="message"  placeholder="メッセージ" required><?php echo nl2br($_SESSION['message']) ?></textarea>
        <input type="submit" name="back" value="戻る" class="sendbtn">
        <input type="submit" name="send" value="送信" class="sendbtn">
      </form>
    </div>
  <?php } else { ?>
    <!-- 完了画面 -->
    送信しました。お問い合わせありがとうございました。<br>
  <?php } ?>

<?php
include('./app/_footer.php');