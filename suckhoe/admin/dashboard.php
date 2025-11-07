<?php
include '../includes/db_connect.php';
include 'admin_header.php';

// Thống kê
$user_count = $conn->query("SELECT COUNT(*) AS total FROM users WHERE role='user'")->fetch_assoc()['total'];
$appointment_count = $conn->query("SELECT COUNT(*) AS total FROM appointments")->fetch_assoc()['total'];
$confirmed_count = $conn->query("SELECT COUNT(*) AS total FROM appointments WHERE status='Đã xác nhận'")->fetch_assoc()['total'];
?>

<div class="content">
  <h2>📊 Tổng quan hệ thống</h2>
  <div class="cards">
    <div class="card">
      <h3>👥 Người dùng</h3>
      <p><?= $user_count ?></p>
    </div>
    <div class="card">
      <h3>📅 Lịch hẹn</h3>
      <p><?= $appointment_count ?></p>
    </div>
    <div class="card">
      <h3>✅ Đã xác nhận</h3>
      <p><?= $confirmed_count ?></p>
    </div>
  </div>
</div>

<?php include 'admin_footer.php'; ?>
