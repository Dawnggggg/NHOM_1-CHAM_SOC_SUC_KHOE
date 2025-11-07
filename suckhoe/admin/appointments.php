<?php
include '../includes/db_connect.php';
include 'admin_header.php';

// Xác nhận lịch hẹn
if (isset($_GET['confirm'])) {
  $id = $_GET['confirm'];
  $conn->query("UPDATE appointments SET status='Đã xác nhận' WHERE id=$id");
  header("Location: appointments.php");
  exit;
}

$result = $conn->query("
  SELECT a.id, u.username, a.fullname, a.phone, a.service, a.appointment_date, a.note, a.status, a.created_at
  FROM appointments a
  LEFT JOIN users u ON a.user_id = u.id
  ORDER BY a.created_at DESC
");
?>

<div class="content">
  <h2>📅 Quản lý lịch hẹn</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Người dùng</th>
        <th>Họ tên</th>
        <th>Điện thoại</th>
        <th>Dịch vụ</th>
        <th>Ngày hẹn</th>
        <th>Ghi chú</th>
        <th>Trạng thái</th>
        <th>Hành động</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= htmlspecialchars($row['username'] ?? 'Khách') ?></td>
        <td><?= htmlspecialchars($row['fullname']) ?></td>
        <td><?= htmlspecialchars($row['phone']) ?></td>
        <td><?= htmlspecialchars($row['service']) ?></td>
        <td><?= $row['appointment_date'] ?></td>
        <td><?= htmlspecialchars($row['note']) ?></td>
        <td>
          <span class="<?= $row['status'] == 'Đã xác nhận' ? 'status-ok' : 'status-wait' ?>">
            <?= $row['status'] ?>
          </span>
        </td>
        <td>
          <?php if ($row['status'] != 'Đã xác nhận'): ?>
            <a class="btn btn-green" href="?confirm=<?= $row['id'] ?>">Xác nhận</a>
          <?php else: ?>
            <span class="done">✔</span>
          <?php endif; ?>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

<?php include 'admin_footer.php'; ?>
