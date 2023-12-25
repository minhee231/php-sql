<?php
$host = 'localhost';
$port = '3306';
$dbname = 'image';
$username = 'root';
$password = '';

$db = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// gif 테이블의 데이터 가져오기
$image_stmt = $db->query("SELECT image_src FROM gif WHERE id = 1");
$image_data = $image_stmt->fetch(PDO::FETCH_ASSOC);

// image_text 테이블의 데이터 가져오기
$text_stmt = $db->query("SELECT chipi FROM image_text WHERE id = 1");
$text_data = $text_stmt->fetch(PDO::FETCH_ASSOC);


for ($i = 0; $i < 1000; $i++) {
    echo "<h1>{$text_data['chipi']}</h1>";
    echo "<img src={$image_data['image_src']}>";
    echo $i;
}

echo "<h1>{$text_data['chipi']}</h1>";
echo "<img src={$image_data['image_src']}>";
?>
