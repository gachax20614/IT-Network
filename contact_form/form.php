<form method="post" action="./contact_form/check.php">
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
            
    
     