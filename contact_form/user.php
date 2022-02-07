<!-- ユーザー用のメールフォーマット -->
<?php
// 自動返信メール本文（ヒアドキュメント）
$messageUser = <<< EOD
お問い合わせありがとうございます。
下記の内容で承りました。

--------------------------------------------------------

【NAME】{$name}
【E-MAIL】{$email}
【MESSAGE】
{$textarea}

--------------------------------------------------------

折り返しご返信させていただきますので、
しばらくお待ちください。
EOD;

if(!empty($_SESSION['e-mail'])) {

// 自動返信メール送信設定
mb_send_mail($_SESSION['e-mail'],"お問い合わせありがとうございます",$messageUser,$addHeader,$addOption);

$isSend = true;
} else {
$isSend = false;
}
?>