<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hello-New world">
    <title>IT Network</title>
    <link rel="shortcut icon" href="img/favicon.svg">
    <!--CSS-->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <header id="header">
      <h2><a href="index.html" class="btn">IT-Network</a></h2>
      <!-- ハンバーガーメニュー -->
      <div class="nav_toggle">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="nav">
        <ul>
          <li><a href="index.html">Top</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#work">Work</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main id="main-v">
      <img src="img/build.jpg" alt="会社外観の写真">
      <h1>Hello-<br>Newworld</h1>
    </main>
    <div class="black"></div>
    <section id="about">
      <h3><a href="about.html">About</a></h3>
      <div class="bg-img1"></div>
      <div class="about-item">
        <div class="about-img">
          <img src="img/pc.jpg" alt="デスクに置かれたパソコンの写真">
        </div>
        <div class="about-txt">
          <span>私たちは新しい未来を創造します!</span>
          <p>新しいことを模索し、社会や生活が豊かになるように日々挑戦し続けます。<br>
            新しいことを模索し、社会や生活が豊かになるように日々挑戦し続けます。<br>
            新しいことを模索し、社会や生活が豊かになるように日々挑戦し続けます。</p>
          </div>
        </div>
      </section>
      <div class="black"></div>
      <section id="work">
        <h3><a href="work.html">Work</a></h3>
        <div class="bg-img2"></div>
        <div class="work-item">
          <div class="work-img">
            <img src="img/floor.jpg" alt="会社内の就業写真"><img src="img/hearing.jpg" alt="お客様との打ち合わせの写真"><img src="img/team.jpg" alt="仲間とのコミニケーションの様子"><img src="img/design.jpg" alt="プロジェクトを進めているパソコンの画面写真">
          </div>
          <div class="work-txt pc">
            <span>未来の創造に取り組みます!</span>
            <p>未来創造にコミットします。
              未来創造にコミットします。<br>
              未来創造にコミットします。
              未来創造にコミットします。<br>
              未来創造にコミットします。
              未来創造にコミットします。<br></p>
            </div>
            <div class="work-txt sp">
              <span>未来の創造に取り組みます!</span>
              <p>未来創造にコミットします。<br>
                未来創造にコミットします。<br>
                未来創造にコミットします。<br>
                未来創造にコミットします。<br>
                未来創造にコミットします。<br>
                未来創造にコミットします。<br></p>
              </div>
            </div>
          </section>
          <div class="black"></div>
          <section id="contact">
            <h3><a href=" contact.html">Contact</a></h3>
            <div class="bg-img3"></div>
            <form method="post" action="./check.php">
  <?php
    //CSRF対策のワンタイムトークン発行
    $randomNumber = openssl_random_pseudo_bytes(16);
    $token = bin2hex($randomNumber);
    echo '<input name="input_token" type="hidden" value="'.$token.'">';
    //トークンをセッションに格納
    // *宣言の前に<?PHP session_start();を記述する
    $_SESSION['input_token'] = $token;
    ?>
              <div class="contact-txt">
                <p>NAME</p>
                <input type="text" name="name" id="name" value="" placeholder="お名前を入力してください">
                <p>E-MAIL</p>
                <input type="text" name="e-mail" id="e-mail" value="" placeholder="メールアドレスを入力してください">
                <p>MESSAGE</p>
                <textarea name="message" id="message" cols="30" rows="10" value="" placeholder="お問い合わせ内容を入力してください"></textarea>
                <table class="check_btn">
                <tr>
                  <td colspan="2">
                    <input type="reset" value="リセット">
                    <input type="submit" value="確認画面へ">
                  </td>
                </tr>
              </table>
                </div>
              </form>
    </section>
      <footer>
        <div class="footer-txt">
          <p>2th Floor xxxx Building x-x-x Nishiazabu, Minato-ku, Tokyo 106-0031 Japan<br>
            tel:000-0000-0000 url:www.xxxxxx.jp</p>
            <p>©︎ 2022 IT Network</p>
          </div>
          </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
  </html>