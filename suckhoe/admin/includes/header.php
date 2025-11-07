<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Quản trị hệ thống sức khỏe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f4f9f9;
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      width: 240px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #2e86de;
      color: #fff;
      padding-top: 30px;
    }
    .sidebar h4 {
      text-align: center;
      margin-bottom: 30px;
      font-weight: bold;
    }
    .sidebar a {
      display: block;
      color: #fff;
      padding: 12px 20px;
      text-decoration: none;
      transition: background 0.3s;
    }
    .sidebar a:hover {
      background-color: #54a0ff;
    }
    .content {
      margin-left: 250px;
      padding: 30px;
    }
    .btn-red {
      background-color: #e55039;
      color: #fff;
      border: none;
      padding: 5px 10px;
      border-radius: 5px;
      text-decoration: none;
    }
    .btn-red:hover {
      background-color: #c0392b;
    }
    table {
      background-color: #fff;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    th {
      background-color: #2e86de;
      color: #fff;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h4>Admin Panel</h4>
  <a href="dashboard.php">🏠 Trang chủ</a>
  <a href="appointments.php">📅 Lịch khám</a>
  <a href="services.php">💊 Dịch vụ</a>
  <a href="users.php">👥 Người dùng</a>
  <a href="../index.php">↩️ Quay lại trang chính</a>
</div>

<div class="content">
