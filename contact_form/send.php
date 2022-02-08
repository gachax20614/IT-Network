<?php
session_start();
if(!$_SESSION) {
  header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="お問い合わせ完了画面">
    <title>ITN | お問い合わせ完了画面</title>
    <link rel="shortcut icon" href="../img/favicon.svg">
    <!--CSS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
  </head>
<?php

// 任意入力項目の配列が空の場合のエラーメッセージ制御
error_reporting(E_ALL ^ E_NOTICE);

// メール差出人
$sender = "メール差出人";

// メール送信元
$mailFrom = "it-network@example.com";

// メール送信先
$replyTo = "info@example.com";

// 管理者メールアドレス
$adminEmail = "it-network@example.com";

// メールヘッダ設定
$addHeader ="From:".mb_encode_mimeheader($sender)."<".$mailFrom.">\n";
$addHeader .= "Reply-to: ".$replyTo."\n";
$addHeader .= "X-Mailer: PHP/". phpversion();

// 迷惑メール対策
$addOption = '-f'.$mailFrom;

// タイムスタンプ
date_default_timezone_set('Asia/Tokyo');
$timeStamp = time();
$week = array('日', '月', '火', '水', '木', '金', '土');
$dateFormatYMD = date('Y年m月d日',$timeStamp);
$dateFormatHIS = date('H時i分s秒',$timeStamp);
$weekFormat = "(".$week[date('w',$timeStamp)].")";
$outputDate = $dateFormatYMD.$weekFormat.$dateFormatHIS;

// XSS対策用サニタイズ
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// メール本文内に表示するデータの変化
$name = h($_SESSION['name']);
$email = h($_SESSION['e-mail']);
$textarea = h($_SESSION['message']);

include('./user.php');

include('./admin.php');

// メール共通送信設定
mb_language("ja");
mb_internal_encoding("UTF-8");

session_destroy();
?>

<?php if($isSend): ?>
  <p>フォーム内容が【<?php echo h($_SESSION['e-mail']); ?>】宛にメールで送信されました。</p>
  <?php else: ?>
    <p>送信エラー:メールフォームからの送信に失敗しました。お手数ですが再度お試しください。</p>
    <?php endif; ?>
    