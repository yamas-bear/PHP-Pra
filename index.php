<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');
    } catch (PDOException $e) {
        echo 'DB接続エラー: ' .  $e->getMessage();
    }


    ?>
</body>

</html>

/*

PDO:PHP Data Object　データベースを扱うためのオブジェクト
PDO('データベースの名前;ローカルホストのIPアドレス;文字コード','ユーザー名','パスワード');
データベースを扱うときは例外処理で扱うのが基本






*/