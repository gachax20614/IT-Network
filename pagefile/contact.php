<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contact">
    <title>ITN | お問い合わせ</title>
    <link rel="shortcut icon" href="../img/favicon.svg">
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
  </head>
  <body style="background: black;">
  <body style="background: black;">
  <header id="header">
    <h2><a href="../index.php" class="btn">IT-Network</a></h2>
    <!-- ハンバーガーメニュー -->
    <div class="nav_toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <nav class="nav">
      <ul>
        <li><a href="../index.php">Top</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="work.php">Work</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
    <article>
      <h1 class="heading" data-en="Contact"><span>お問い合わせ</span></h1>
      <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d25933.699536949844!2d139.7056449!3d35.6594558!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sja!2sjp!4v1644311553465!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <div class="address_txt">
          <p>2th Floor xxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan<br>
          tel:000-0000-0000<br>
          url:www.xxxxxx.jp</p>
        </div>
      </div>
      <form method="post" action="../contact_form/check.php">
  <?php
    //CSRF対策のワンタイムトークン発行
    $randomNumber = openssl_random_pseudo_bytes(16);
    $token = bin2hex($randomNumber);
    echo '<input name="input_token" type="hidden" value="'.$token.'">';
    //トークンをセッションに格納
    // *宣言の前に<?PHP session_start();を記述する
    $_SESSION['input_token'] = $token;
    ?>
            <div class="contactform-txt">
                <p>NAME</p>
                <input type="text" name="name" id="name" value="" placeholder="お名前を入力してください">
                <p>E-MAIL</p>
                <input type="text" name="e-mail" id="e-mail" value="" placeholder="メールアドレスを入力してください">
                <p>MESSAGE</p>
                <textarea name="message" id="message" cols="30" rows="10" value="" placeholder="お問い合わせ内容を入力してください"></textarea>
                <table class="contact_check_btn">
                <tr>
                  <td colspan="2">
                    <input type="reset" value="リセット">
                    <input type="submit" value="確認画面へ">
                  </td>
                </tr>
              </table>
            </div>
</form>
    </article>
    <footer>
      <div class="footer-txt">
        <p>©︎ 2022 IT Network</p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
    <script src="../js/script.js"></script>
  </body>
  </html>