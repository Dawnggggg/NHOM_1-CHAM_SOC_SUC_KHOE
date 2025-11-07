<?php
// ✅ Khởi động session để kiểm tra người dùng đăng nhập
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>

<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Chăm sóc sức khỏe chuyên nghiệp</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <style>
    .services, .doctors {
  padding: 60px 20px;
  text-align: center;
  background: #f9fdfc;
}

.services h2, .doctors h2 {
  font-size: 28px;
  color: #00796b;
  margin-bottom: 30px;
}

.service-list, .doctor-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 25px;
  max-width: 1100px;
  margin: 0 auto;
}

.service-item, .doctor-item {
  background: white;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  transition: transform 0.2s;
}

.service-item:hover, .doctor-item:hover {
  transform: translateY(-5px);
}

.service-item img, .doctor-item img {
  width: 100%;
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
  margin-bottom: 15px;
}

.service-item h3, .doctor-item h3 {
  color: #004d40;
  margin-bottom: 5px;
}

.service-item p, .doctor-item p {
  color: #555;
  font-size: 15px;
}

    :root {
      --primary: #009688;
      --dark: #0d1b2a;
      --muted: #64748b;
      --bg-light: #f8fafc;
    }

    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-light);
      color: var(--dark);
    }

    /* Navbar */
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 80px;
      background: white;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
      position: sticky;
      top: 0;
      z-index: 50;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
      font-weight: 700;
      font-size: 18px;
      color: var(--dark);
    }

    nav {
      display: flex;
      align-items: center;
      gap: 20px;
      font-weight: 500;
    }

    nav a {
      text-decoration: none;
      color: var(--dark);
      transition: color 0.2s;
    }

    nav a:hover {
      color: var(--primary);
    }

    .btn-primary {
      background: var(--primary);
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
    }

    .btn-outline {
      background: transparent;
      border: 2px solid var(--primary);
      color: var(--primary);
      padding: 8px 18px;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      text-decoration: none;
    }

    /* Hero Section */
    .hero {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 100px 80px;
      background: linear-gradient(to bottom, #f0fdfc, #ffffff);
    }

    .hero-text { max-width: 600px; }
    .hero-text h1 {
      font-size: 48px;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 20px;
    }
    .hero-text h1 span { color: var(--primary); }
    .hero-text p {
      color: var(--muted);
      margin-bottom: 30px;
      line-height: 1.6;
    }
    .hero-buttons {
      display: flex;
      gap: 15px;
      margin-bottom: 40px;
    }

    .hero-image img {
      width: 480px;
      border-radius: 16px;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
    }

    /* Stats */
    .stats {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 80px;
      background: white;
      padding: 60px 20px;
      box-shadow: 0 -1px 0 rgba(0, 0, 0, 0.05);
    }
    .stat { text-align: center; }
    .stat-icon { font-size: 32px; color: var(--primary); margin-bottom: 10px; }
    .stat h3 { margin: 5px 0; font-size: 22px; color: var(--dark); }
    .stat p { color: var(--muted); margin: 0; font-size: 14px; }

    @media (max-width: 900px) {
      header { flex-direction: column; gap: 10px; padding: 15px 30px; }
      .hero { flex-direction: column; padding: 60px 30px; text-align: center; }
      .hero-buttons { justify-content: center; }
      .hero-image img { width: 100%; max-width: 400px; margin-top: 30px; }
      .stats { flex-wrap: wrap; gap: 30px; }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">💚 Chăm sóc sức khỏe chuyên nghiệp</div>
    <nav>
      <a href="dichvu.php">Dịch vụ</a>
      <a href="bacsi.php">Bác sĩ</a>
      <a href="vechungtoi.php">Về chúng tôi</a>
      <a href="lienhe.php">Liên hệ tư vấn</a>
      <?php if (isset($_SESSION['username'])): ?>
      
        <p>👋 Xin chào, <strong><?= htmlspecialchars($_SESSION['username']) ?></strong>!</p>
      <a href="logout.php">Đăng xuất</a>
      <?php else: ?>
      
      <?php endif; ?>

      <?php if(isset($_SESSION['user'])): ?>
        <span>Xin chào, <b><?= htmlspecialchars($_SESSION['user']['username']) ?></b></span>
        <a href="includes/auth.php?logout=1" class="btn-outline">Đăng xuất</a>
        <?php if($_SESSION['user']['role'] == 'admin'): ?>
          <a href="admin/dashboard.php" class="btn-primary">Trang quản trị</a>
        <?php endif; ?>
      <?php else: ?>
        <a href="login.php" class="btn-primary">Đăng nhập</a>
        <a href="register.php" class="btn-outline">Đăng ký</a>
      <?php endif; ?>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Chăm sóc sức khỏe <span>chuyên nghiệp</span> </h1> 
      <p>Hệ thống quản lý dịch vụ chăm sóc sức khỏe hiện đại với đội ngũ bác sĩ giàu kinh nghiệm, công nghệ tiên tiến và dịch vụ tận tâm.</p>
      <div class="hero-buttons">
        <a href="datlich.php" class="btn-primary">Đặt lịch ngay</a>
      </div>
    </div>

    <div class="hero-image">
      <img src="anh/anh.webp" alt="Bác sĩ trong phòng khám" />
    </div>
  </section>

  <section class="stats">
    <div class="stat">
      <div class="stat-icon">👨‍⚕️</div>
      <h3>5.000+</h3>
      <p>Điều trị nhân viên</p>
    </div>
    <div class="stat">
      <div class="stat-icon">🩺</div>
      <h3>50+</h3>
      <p>Bác sĩ chuyên khoa</p>
    </div>
    <div class="stat">
      <div class="stat-icon">⭐</div>
      <h3>98%</h3>
      <p>Tỷ lệ hài lòng</p>
    </div>
    <div class="stat">
      <div class="stat-icon">⏰</div>
      <h3>24/7</h3>
      <p>Hỗ trợ khẩn cấp</p>
    </div>
  </section>

</body>
<!-- ======================= DỊCH VỤ ======================= -->
<section id="dichvu" class="services">
  <h2>💉 Dịch vụ chăm sóc sức khỏe</h2>
  <div class="service-list">
    <div class="service-item">
      <img src="anh/tongquat.jpg" alt="Khám tổng quát">
      <h3>Khám tổng quát</h3>
      <p>Kiểm tra toàn diện sức khỏe, phát hiện sớm các bệnh lý tiềm ẩn.</p>
    </div>
    <div class="service-item">
      <img src="anh/timmach.jpg" alt="Khám tim mạch">
      <h3>Khám tim mạch</h3>
      <p>Đội ngũ bác sĩ tim mạch giàu kinh nghiệm cùng thiết bị hiện đại.</p>
    </div>
    <div class="service-item">
      <img src="anh/nhakhoa.jpg" alt="Khám nha khoa">
      <h3>Khám nha khoa</h3>
      <p>Chăm sóc răng miệng chuyên nghiệp với công nghệ tiên tiến.</p>
    </div>
    <div class="service-item">
      <img src="anh/nhi.jpg" alt="Khám nhi khoa">
      <h3>Khám nhi khoa</h3>
      <p>Quan tâm đặc biệt đến sức khỏe của trẻ nhỏ với bác sĩ tận tâm.</p>
    </div>
  </div>
</section>

<!-- ======================= BÁC SĨ ======================= -->
<section id="bacsi" class="doctors">
  <h2>🩺 Đội ngũ bác sĩ chuyên khoa</h2>
  <div class="doctor-list">
    <div class="doctor-item">
      <img src="anh/an.jpg" alt="Bác sĩ 1">
      <h3>BS. Nguyễn Văn An</h3>
      <p>Chuyên khoa Tim mạch</p>
    </div>
    <div class="doctor-item">
      <img src="anh/hoa.jpg" alt="Bác sĩ 2">
      <h3>BS. Lê Thị Hoa</h3>
      <p>Chuyên khoa Nhi</p>
    </div>
    <div class="doctor-item">
      <img src="anh/minh.jpg" alt="Bác sĩ 3">
      <h3>BS. Phạm Quang Minh</h3>
      <p>Chuyên khoa Nội tổng hợp</p>
    </div>
    <div class="doctor-item">
      <img src="anh/hanh.jpg" alt="Bác sĩ 4">
      <h3>BS. Trần Thị Hạnh</h3>
      <p>Chuyên khoa Da liễu</p>
    </div>
  </div>
</section>

</html>
