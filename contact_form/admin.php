<!-- 管理者用のメールフォーマット -->
<?php
// 管理者確認用メール本文（ヒアドキュメント）
$messageAdmin = <<< EOD
ウェブサイトより下記の内容でお問い合わせがありました。

-------------------------------------------------------

【NAME】{$name}
【E-MAIL】{$email}
【MESSAGE】
{$textarea}

------------------------------------------------------
EOD;

if(!empty($_SESSION['e-mail'])) {

// 管理者確認用メール送信設定
mb_send_mail($adminEmail,"お問い合わせ:".$outputDate,$messageAdmin,$addHeader,$addOption);

$isSend = true;
} else {
$isSend = false;
}
?>