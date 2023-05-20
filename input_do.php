<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  try {
    $DB_DATABASE = 'sumiajito_shitsu';
    $DB_USERNAME = 'sumiajito_shitsu';
    $DB_PASSWORD = 'Workup2019';
    $DB_OPTION = 'charset=utf8';
    $memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);


    $PDO_DSN = "mysql:host=mysql1002b.xserver.jp;dbname=" . $DB_DATABASE . ";" . $DB_OPTION;
    $db = new PDO(
      $PDO_DSN,
      $DB_USERNAME,
      $DB_PASSWORD,
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ]
    );
    echo 'DB接続成功';
  } catch (PDOException $e) {
    echo 'DB接続失敗';
  }
  ?>
</body>

</html>