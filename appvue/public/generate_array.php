<?php
$mysqli = new mysqli('localhost', 'root', 'Academy2023', 'test');

if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

$array = array();
$array[] = 1;

for ($i = 1; $i < 10; $i++) {
    $randomNumber = mt_rand(1, 100);

    if ($randomNumber > $array[$i - 1]) {
        $array[] = $randomNumber;
    } else {
        $array[] = $array[$i - 1] + 1;
    }
}

$query = "INSERT INTO generated_array (generated_array) VALUES ('" . implode(',', $array) . "')";
$mysqli->query($query);

$mysqli->close();

echo implode(', ', $array);
?>