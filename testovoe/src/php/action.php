<?php

$servername = "localhost";
$username = "user";
$password = "mypassword";
$dbname = "mybd";
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$tel = $_POST['tel'];


$sql = "INSERT INTO Users (name, tel, ) VALUES ('$name', '$tel')";
if ($conn->query($sql) === TRUE) {
    echo "Данные  сохранены";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
