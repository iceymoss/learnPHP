<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$port = 3306;

// 创建连接
$conn = new mysqli($servername, $username, $password, '', $port);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";

// 创建数据库
$sql = "CREATE DATABASE demo";
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

?>
