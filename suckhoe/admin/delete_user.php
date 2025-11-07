<?php
include("../includes/db_connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $conn->query("DELETE FROM users WHERE id = $id");
    header("Location: dashboard.php");
    exit();
}
?>
<?php
session_start();
include("../includes/db_connect.php");

// Kiểm tra quyền admin
$role = null;
if (isset($_SESSION['user']) && is_array($_SESSION['user'])) {
    $role = $_SESSION['user']['role'] ?? null;
} else {
    $role = $_SESSION['role'] ?? null;
}
if ($role !== 'admin') {
    header("Location: ../login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    if ($id > 0) {
        // Không xóa admin (phòng trường hợp)
        $check = $conn->prepare("SELECT role FROM users WHERE id = ?");
        $check->bind_param("i", $id);
        $check->execute();
        $r = $check->get_result()->fetch_assoc();
        if ($r && $r['role'] !== 'admin') {
            $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        }
    }
}
header("Location: users.php");
exit();
?>
