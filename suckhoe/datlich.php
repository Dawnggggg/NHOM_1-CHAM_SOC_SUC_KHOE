<?php
include('header.php');
include('includes/db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $service = $_POST['service'];
    $date = $_POST['appointment_date'];
    $note = $_POST['note'];

    $user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : NULL;

    $stmt = $conn->prepare("INSERT INTO appointments (user_id, fullname, phone, service, appointment_date, note) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $user_id, $fullname, $phone, $service, $date, $note);

    if ($stmt->execute()) {
        $success = "✅ Đặt lịch thành công! Chúng tôi sẽ liên hệ với bạn sớm.";
    } else {
        $error = "❌ Lỗi: Không thể đặt lịch. Vui lòng thử lại.";
    }
}
?>

<div style="max-width:800px; margin:40px auto; background:white; padding:30px; border-radius:10px; box-shadow:0 3px 10px rgba(0,0,0,0.1);">
    <h2 style="text-align:center; color:#0288D1;">📅 Đặt lịch khám bệnh</h2>
    <p style="text-align:center;">Vui lòng nhập thông tin để đặt lịch hẹn với chúng tôi.</p>

    <?php if(!empty($success)): ?>
        <p style="color:green; text-align:center;"><?= $success ?></p>
    <?php elseif(!empty($error)): ?>
        <p style="color:red; text-align:center;"><?= $error ?></p>
    <?php endif; ?>

    <form method="post" style="display:flex; flex-direction:column; gap:15px;">
        <label>Họ và tên:</label>
        <input type="text" name="fullname" required style="padding:10px; border:1px solid #ccc; border-radius:6px;">

        <label>Số điện thoại:</label>
        <input type="text" name="phone" required style="padding:10px; border:1px solid #ccc; border-radius:6px;">

        <label>Dịch vụ:</label>
        <select name="service" required style="padding:10px; border:1px solid #ccc; border-radius:6px;">
            <option value="">-- Chọn dịch vụ --</option>
            <option>Khám tổng quát</option>
            <option>Tim mạch</option>
            <option>Nhi khoa</option>
            <option>Da liễu</option>
            <option>Xét nghiệm</option>
        </select>

        <label>Ngày khám:</label>
        <input type="date" name="appointment_date" required style="padding:10px; border:1px solid #ccc; border-radius:6px;">

        <label>Ghi chú:</label>
        <textarea name="note" rows="3" style="padding:10px; border:1px solid #ccc; border-radius:6px;"></textarea>

        <button type="submit" style="padding:12px; background:#4FC3F7; color:white; border:none; border-radius:6px; font-size:16px; cursor:pointer;">Đặt lịch ngay</button>
    </form>
</div>

<?php include('footer.php'); ?>
