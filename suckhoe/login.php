<?php
session_start();
include("includes/db_connect.php");

$msg = "";

// Nếu người dùng gửi form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = md5($_POST['password']);

    // Kiểm tra tài khoản trong CSDL
   $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");

    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Lưu session
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Điều hướng
        if ($row['role'] === 'admin') {
            header("Location: admin/dashboard.php");
        } else {
            header("Location: index.php");
        }
        exit();
    } else {
        $msg = "❌ Sai tên đăng nhập hoặc mật khẩu!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #e8fdf5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 350px;
            text-align: center;
        }
        h2 {
            color: #009688;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            background-color: #009688;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            width: 95%;
        }
        button:hover {
            background-color: #00796b;
        }
        p {
            margin-top: 10px;
        }
        a {
            color: #009688;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập hệ thống</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
            <input type="password" name="password" placeholder="Mật khẩu" required><br>
            <button type="submit">Đăng nhập</button>
        </form>
        <p style="color:red;"><?= $msg ?></p>
        <p>Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
    </div>
</body>
</html>
