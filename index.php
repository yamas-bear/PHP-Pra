<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    try {
        $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8', 'root', '');

        $db->exec('INSERT INTO sample SET name="' . $_POST['memo'] . '"');
    } catch (PDOException $e) {
        echo 'DB接続エラー: ' .  $e->getMessage();
    }

    // $db->exec('INSERT INTO  sample SET name="はなお"'); //データの追加

    // $records = $db->query('SELECT * FROM sample'); //query構文はsqlによって得られたデータを戻り値として取得する
    // while ($record = $records->fetch()) { //fetchは一行ずつ取り出していきデータがなくなったらfalseとなる
    //     print($record['name'] . "\n");
    // }




    /*
PDO:PHP Data Object　データベースを扱うためのオブジェクト
PDO('データベースの名前;ローカルホストのIPアドレス;文字コード','ユーザー名','パスワード');
データベースを扱うときは例外処理で扱うのが基本

*/


    ?>
</body>

</html>