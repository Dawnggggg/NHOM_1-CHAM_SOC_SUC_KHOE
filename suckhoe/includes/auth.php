<?php
session_start();
include 'db.php';

// Xử lý đăng ký
if (isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users (username, password, email, role) VALUES (?, ?, ?, 'user')";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $password, $email);

    if ($stmt->execute()) {
        echo "<script>alert('Đăng ký thành công! Hãy đăng nhập.'); window.location.href='../login.php';</script>";
    } else {
        echo "<script>alert('Tên người dùng đã tồn tại.'); window.location.href='../register.php';</script>";
    }
}

// Xử lý đăng nhập
if (isset($_POST['login'])) {
    $username = trim($_POST['username']);
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['user'] = $user;

        if ($user['role'] === 'admin') {
            header("Location: ../admin/dashboard.php");
        } else {
            header("Location: ../index.php");
        }
    } else {
        echo "<script>alert('Sai tên đăng nhập hoặc mật khẩu!'); window.location.href='../login.php';</script>";
    }
}

// Đăng xuất
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: ../index.php");
}
?>
