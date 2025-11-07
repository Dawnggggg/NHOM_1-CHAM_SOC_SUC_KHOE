<?php
include("includes/db_connect.php");
$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);
    $role = $_POST['role'];

    // Kiểm tra trùng tên hoặc email
    $check = $conn->prepare("SELECT id FROM users WHERE username=? OR email=?");
    $check->bind_param("ss", $username, $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $msg = "⚠️ Tên đăng nhập hoặc email đã tồn tại!";
    } else {
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, role, created_at) VALUES (?, ?, ?, ?, NOW())");
        $stmt->bind_param("ssss", $username, $email, $password, $role);
        if ($stmt->execute()) {
            $msg = "✅ Đăng ký thành công! <a href='login.php'>Đăng nhập</a>";
        } else {
            $msg = "❌ Lỗi khi đăng ký!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký tài khoản</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #e8fdf5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 400px;
            text-align: center;
        }
        input, select {
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
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Đăng ký tài khoản</h2>
        <form method="post">
            <input type="text" name="username" placeholder="Tên đăng nhập" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Mật khẩu" required><br>
            <select name="role">
                <option value="user">Người dùng</option>
                <option value="admin">Quản trị viên</option>
            </select><br>
            <button type="submit">Đăng ký</button>
        </form>
        <p style="color:red;"><?= $msg ?></p>
        <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
</body>
</html>
