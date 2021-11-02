<?php

$n = mt_rand(1,3);

if ($n === 1){
  $message = 'こんにちは!';
} elseif ($n === 2){
  $message = 'おはようございます!';
} else {
  $message = 'こんばんは!';
}

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$today = date('Y-m-d H:i:s l');

//mail
session_start();
  $mode = 'input';
  $errmessage = array();
  if( isset($_POST['back']) && $_POST['back'] ){
    $_SESSION['fullname'] = "";
    $_SESSION['email']    = "";
    $_SESSION['message']  = "";
  } else if( isset($_POST['confirm']) && $_POST['confirm'] ){
      // 確認画面
    if( !$_POST['fullname'] ) {
        $errmessage[] = "名前を入力してください";
    } else if( mb_strlen($_POST['fullname']) > 100 ){
        $errmessage[] = "名前は100文字以内にしてください";
    }
    $_SESSION['fullname'] = h($_POST['fullname']);

    if( !$_POST['email'] ) {
        $errmessage[] = "Eメールを入力してください";
    } else if( mb_strlen($_POST['email']) > 200 ){
        $errmessage[] = "Eメールは200文字以内にしてください";
    } else if( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        $errmessage[] = "メールアドレスが不正です";
    }
    $_SESSION['email']    = h($_POST['email']);

    if( !$_POST['message'] ){
        $errmessage[] = "お問い合わせ内容を入力してください";
    } else if( mb_strlen($_POST['message']) > 500 ){
        $errmessage[] = "お問い合わせ内容は500文字以内にしてください";
    }
    $_SESSION['message'] = h($_POST['message']);

    if( $errmessage ){
        $mode = 'input';
    } else {
        $token = bin2hex(random_bytes(32));
        $_SESSION["token"] = $token;
        $mode = 'confirm';
    }
  } else if( isset($_POST['send']) && $_POST['send'] ){
    // 送信ボタンを押したとき
    if( !$_POST['token'] || !$_SESSION['token'] || !$_SESSION['email'] ){
      $errmessage[] = '不正な処理が行われました';
      $_SESSION     = array();
      $mode         = 'input';
    } else if( $_POST['token'] != $_SESSION['token'] ){
      $errmessage[] = '不正な処理が行われました';
      $_SESSION     = array();
      $mode         = 'input';
    } else {
      $message  = "お問い合わせを受け付けました \r\n"
                . "名前: " . $_SESSION['fullname'] . "\r\n"
                . "email: " . $_SESSION['email'] . "\r\n"
                . "お問い合わせ内容:\r\n"
                . preg_replace("/\r\n|\r|\n/", "\r\n", $_SESSION['message']);
    
      mb_language("ja");
      mb_internal_encoding("UTF-8");  
      $headers = [
        'MIME-Version' => '1.0',
        'Content-Transfer-Encoding' => '7bit',
        'Content-Type' => 'text/plain; charset=UTF-8',
        'Return-Path' => 'postmaster@automata-dogma.com',
        'From' => 'Taenishi',
        // 'Sender' => 'SenderName <from@example.com>',
        'Reply-To' => 'postmaster@automata-dogma.com',
        'Organization' => 'Taenishi.Inc',
        'X-Sender' => 'postmaster@automata-dogma.com',
        'X-Mailer' => 'Postfix/2.10.1',
        'X-Priority' => '3',
      ];
      array_walk( $headers, function( $_val, $_key ) use ( &$header_str ) {
        $header_str .= sprintf( "%s: %s \r\n", trim( $_key ), trim( $_val ) );
      } );
      // mb_send_mail($_SESSION['email'],'お問い合わせありがとうございます',$message,"From: automata-dogma.com",$headers_str);
      mb_send_mail($_SESSION['email'],'お問い合わせありがとうございます',$message,"From: automata-dogma.com");
      mb_send_mail('postmaster@automata-dogma.com','妙西ホームページから',$message);
      $_SESSION = array();
      $mode = 'send';
    }
  } else {
    $_SESSION['fullname'] = "";
    $_SESSION['email']    = "";
    $_SESSION['message']  = "";
  }

?>