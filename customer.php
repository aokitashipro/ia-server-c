<?php

#データベースに接続
$dsn = 'mysql:host=localhost; dbname=iadb; charset=utf8';
$user = 'root';
$pass = '$Root1995';

try{
$dbh = new PDO($dsn, $user, $pass); 
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($dbh == null){
echo "接続に失敗しました。";
}else{
# SQL文を定める
$SQL = "SELECT * FROM customer";
$stmt = $dbh->prepare($SQL);
# SQL文の実行と表示
$stmt->execute();
while($row = $stmt->fetch()){
echo "<pre>";
print_r($row);
echo "</pre>";
}
}
}catch (PDOException $e){
echo('エラー内容：'.$e->getMessage());
die();
}
$dbh = null;
?>
