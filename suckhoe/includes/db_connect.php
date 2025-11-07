<?php
$servername = "localhost";
$username = "root";
$password = "LeHaiDang2005"; // nếu MySQL có mật khẩu thì điền vào đây
$dbname = "healthcare_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
//http://localhost:8080/suckhoe/index.php
?>
