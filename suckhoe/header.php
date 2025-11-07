<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Hệ thống chăm sóc sức khỏe</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* ===== HEADER STYLE ===== */
        body {
            font-family: 'Segoe UI', sans-serif;
            margin: 0;
            background-color: #f0f9ff;
        }

        header {
            background: #4FC3F7; /* Xanh nhạt */
            color: white;
            padding: 15px 0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 22px;
            font-weight: bold;
            display: flex;
            align-items: center;
        }

        .logo span {
            margin-left: 6px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: 600;
            transition: all 0.3s;
        }

        nav a:hover {
            text-decoration: underline;
            color: #e3f2fd;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
        }

        .logout-btn, .login-btn, .register-btn {
            background: white;
            color: #4FC3F7;
            border: 1px solid #4FC3F7;
            padding: 6px 12px;
            border-radius: 6px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }

        .logout-btn:hover, .login-btn:hover, .register-btn:hover {
            background: #4FC3F7;
            color: white;
        }
    </style>
</head>
<body>

<header>
    <div class="container">
        <div class="logo">💙 <span>Chăm sóc sức khỏe chuyên nghiệp</span></div>
        <nav>
            <a href="index.php">Trang chủ</a>
            <a href="dichvu.php">Dịch vụ</a>
            <a href="bacsi.php">Bác sĩ</a>
            <a href="vechungtoi.php">Về chúng tôi</a>
            <a href="lienhe.php">Liên hệ tư vấn</a>
        </nav>
        <div class="user-info">
            <?php if (isset($_SESSION['username'])): ?>
                👋 Xin chào, <b><?= htmlspecialchars($_SESSION['username']) ?></b>
                <a href="logout.php" class="logout-btn">Đăng xuất</a>
            <?php else: ?>
                <a href="login.php" class="login-btn">Đăng nhập</a>
                <a href="register.php" class="register-btn">Đăng ký</a>
            <?php endif; ?>
        </div>
    </div>
</header>
