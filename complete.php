<?php
//直リンクされた場合index.phpにリダイレクト
if ($_SERVER["REQUEST_METHOD"] != "POST") {
  header("Location: index.php");
  exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");
//管理者へメール送信
//送信元
$header = "From: shitsukawa@officeworkup.co.jp";
/*管理者のメールアドレス*/
$mail_to = "shitsukawa@officeworkup.co.jp";
/*件名*/
$subject = "お問い合わせがありました";
/*本文*/
$body_msg = <<< EOM
テストYUサイトより、以下の内容のお問い合わせを受信しました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 メール 】
{$_POST["email"]}

【 性別 】
{$_POST["sex"]}

【 住所 】
{$_POST["pref"]}

【 お問い合わせ理由 】
{$_POST["reason"]}

【 お問い合わせ内容 】
{$_POST["contact_body"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
/*送信処理*/
$success = mb_send_mail($mail_to, $subject, $body_msg, $header, $mail_to);


//送信元
$headers = "From: shitsukawa@officeworkup.co.jp";
//送信先アドレス
$to = $_POST['email'];
//メール件名
$subject = "お問い合わせありがとうございます。";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
お問い合わせありがとうございます。

以下の内容で承りました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 メール 】
{$_POST["email"]}

【 性別 】
{$_POST["sex"]}

【 住所 】
{$_POST["pref"]}

【 お問い合わせ理由 】
{$_POST["reason"]}

【 お問い合わせ内容 】
{$_POST["contact_body"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//メール送信
mb_send_mail($to, $subject, $message, $headers);
?>




<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex,nofollow">
  <title>完了画面</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="formCont">
    <h2>お問い合わせ完了</h2>
    <p>お問い合わせありがとうございました。</p>
    <p><a href="index.php">お問い合わせトップへ</p>
    <?php
    try {
      $db = new PDO('mysql:dbname=sumiajito_shitsu;host=mysql1002b.xserver.jp;charset=utf8', 'sumiajito_shitsu', 'Workup2019');

      $count = $db->exec('INSERT INTO フォームテスト SET 名前="' . $_POST['name'] . '" ,メールアドレス="' . $_POST['email'] . '",性別="' . $_POST['sex'] . '",住所="' . $_POST["pref"] . '",お問い合わせ理由="' . $_POST["reason"] . '",お問い合わせ内容="' . $_POST['contact_body'] . '",登録日 = NOW()');
      echo $count . "件のデータを登録しました！";
    } catch (PDOException $e) {
      echo 'DB接続エラー' . $e->getMessage();
    }
    ?>
  </div>
</body>

</html>