<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$port = 3306;
$database = 'demo';

// 创建连接
$conn = new mysqli($servername, $username, $password, $database, $port);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
echo "连接成功";

// 创建数据库
//$sql = "CREATE DATABASE demo";
//if ($conn->query($sql) === TRUE) {
//    echo "数据库创建成功";
//} else {
//    echo "Error creating database: " . $conn->error;
//}

//$sql_ddl = 'CREATE TABLE MyGuests (
//    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//    firstname VARCHAR(30) NOT NULL,
//    lastname VARCHAR(30) NOT NULL,
//    email VARCHAR(50),
//    reg_date TIMESTAMP
//)';
//
//if ($conn->query($sql_ddl) === TRUE) {
//    echo "Table MyGuests created successfully";
//} else {
//    echo "创建数据表错误: " . $conn->error;
//}


//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//
//if ($conn->query($sql) === TRUE) {
//    echo "新记录插入成功";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}

//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Mary', 'Moe', 'mary@example.com');";
//$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('Julie', 'Dooley', 'julie@example.com')";
//
//if ($conn->multi_query($sql) === TRUE) {
//    echo "新记录插入成功";
//} else {
//    echo "Error: " . $sql . "<br>" . $conn->error;
//}


// 预处理及绑定
//$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
//$stmt->bind_param("sss", $firstname, $lastname, $email);
//
//// 设置参数并执行
//$firstname = "John";
//$lastname = "Doe";
//$email = "john@example.com";
//$stmt->execute();
//
//$firstname = "Mary";
//$lastname = "Moe";
//$email = "mary@example.com";
//$stmt->execute();
//
//$firstname = "Julie";
//$lastname = "Dooley";
//$email = "julie@example.com";
//$stmt->execute();
//
//echo "新记录插入成功";
//
//$stmt->close();





$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 结果";
}


$conn->close();

?>
