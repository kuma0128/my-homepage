<?php
$title = 'お問い合わせ - ';
include('./app/_header.php');
?>

  <style>
    body{
      background: #b9c9d1;
      /* margin: px auto; */
    }
    /* div.button{
      text-align: center;
    } */
  </style>

<?php if( $mode == 'input' ){ ?>
    <!-- 入力画面 -->
    <?php
      if( $errmessage ){
        echo '<div style="color:red;">';
        echo implode('<br>', $errmessage );
        echo '</div>';
      }
    ?>
    <form action="./mail.php" method="post" id="mailform">
    <!-- SESSIONで入力内容をサーバーに保存 -->
      名前    <input type="text"    name="fullname" value="<?php echo $_SESSION['fullname'] ?>"><br>
      Eメール <input type="email"   name="email"    value="<?php echo $_SESSION['email'] ?>"><br>
      お問い合わせ内容<br>
      <textarea cols="40" rows="8" name="message"><?php echo $_SESSION['message'] ?></textarea><br>
      <input type="submit" name="confirm" value="確認" />
    </form>
    <p>※IPアドレスを記録しております。いたずらや嫌がらせ等は歓迎いたします。</p>
  <?php } else if( $mode == 'confirm' ){ ?>
    <!-- 確認画面 -->
    <form action="./mail.php" method="post">
    <input type="hidden" name="token" value="<?php echo $_SESSION["token"]; ?>">
      名前    <?php echo $_SESSION['fullname'] ?><br>
      Eメール <?php echo $_SESSION['email'] ?><br>
      お問い合わせ内容<br>
      <?php echo nl2br($_SESSION['message']) ?><br>
      <input type="submit" name="back" value="戻る" />
      <input type="submit" name="send" value="送信" />
    </form>
  <?php } else { ?>
    <!-- 完了画面 -->
    送信しました。お問い合わせありがとうございました。<br>
  <?php } ?>
</body>
</html>

<?php
include('./app/_footer.php');