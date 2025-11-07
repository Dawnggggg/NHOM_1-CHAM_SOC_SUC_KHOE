<?php
include '../includes/db_connect.php';
include __DIR__ . '/includes/header.php'; // ✅ dùng giao diện riêng



if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    // Kiểm tra trước khi xóa (chỉ xóa nếu không phải admin)
    $check = $conn->prepare("SELECT role FROM users WHERE id=?");
    $check->bind_param("i", $id);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if ($user['role'] !== 'admin') {
            $delete = $conn->prepare("DELETE FROM users WHERE id=?");
            $delete->bind_param("i", $id);
            $delete->execute();
        }
    }

    header("Location: users.php");
    exit;
}

// Lấy danh sách người dùng
$sql = "SELECT id, username, email, role, created_at FROM users ORDER BY id ASC";
$result = $conn->query($sql);
?>

<div class="container mt-4">
  <div class="card shadow-sm border-0">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0"><i class="bi bi-people-fill me-2"></i>Quản lý người dùng</h5>
    </div>
    <div class="card-body">
      <table class="table table-striped align-middle text-center">
        <thead class="table-info">
          <tr>
            <th>ID</th>
            <th>Tên đăng nhập</th>
            <th>Email</th>
            <th>Vai trò</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['username']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td>
                <?php if ($row['role'] === 'admin'): ?>
                  <span class="badge bg-danger">Admin</span>
                <?php else: ?>
                  <span class="badge bg-secondary">User</span>
                <?php endif; ?>
              </td>
              <td><?= $row['created_at'] ?></td>
              <td>
                <?php if ($row['role'] === 'user'): ?>
                  <a href="?delete=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">
                    <i class="bi bi-trash"></i> Xóa
                  </a>
                <?php else: ?>
                  <span class="text-muted">Không thể xóa</span>
                <?php endif; ?>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>


