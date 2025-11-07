<?php include('header.php'); ?>

<style>
.service-section {
  max-width: 1100px;
  margin: 60px auto;
  text-align: center;
  font-family: 'Inter', sans-serif;
}
.service-section h2 {
  color: #0288D1;
  font-size: 30px;
  margin-bottom: 15px;
}
.service-section p {
  color: #607D8B;
  font-size: 16px;
  margin-bottom: 40px;
}
.service-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
}
.service-card {
  background: #FFFFFF;
  border-radius: 16px;
  box-shadow: 0 4px 18px rgba(0, 0, 0, 0.08);
  transition: 0.3s;
  overflow: hidden;
}
.service-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 6px 22px rgba(0, 0, 0, 0.12);
}
.service-card img {
  width: 100%;
  height: 180px;
  object-fit: cover;
}
.service-card h3 {
  color: #0288D1;
  font-size: 18px;
  margin: 15px 0 8px;
}
.service-card p {
  color: #455A64;
  font-size: 14px;
  padding: 0 15px 20px;
}
.service-card button {
  background: #E1F5FE;
  color: #0288D1;
  border: none;
  padding: 8px 16px;
  border-radius: 8px;
  margin-bottom: 20px;
  cursor: pointer;
  transition: 0.3s;
}
.service-card button:hover {
  background: #0288D1;
  color: white;
}
</style>

<div class="service-section">
  <h2>🩺 Dịch vụ y tế của chúng tôi</h2>
  <p>Chúng tôi cung cấp các dịch vụ chăm sóc sức khỏe toàn diện, hiện đại và chuyên nghiệp.</p>

  <div class="service-grid">
    <div class="service-card">
      <img src="anh/tongquat.jpg" alt="Khám tổng quát">
      <h3>Khám tổng quát</h3>
      <p>Đánh giá toàn diện tình trạng sức khỏe, giúp phát hiện sớm các bệnh lý tiềm ẩn.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/timmach.jpg" alt="Tim mạch">
      <h3>Khám Tim mạch</h3>
      <p>Chẩn đoán, điều trị các bệnh về tim và hệ mạch máu bằng công nghệ tiên tiến.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/nhi.jpg" alt="Nhi khoa">
      <h3>Khám Nhi khoa</h3>
      <p>Khám và điều trị các bệnh thường gặp ở trẻ em với bác sĩ chuyên khoa Nhi giàu kinh nghiệm.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/dalieu.jpg" alt="Da liễu">
      <h3>Da liễu</h3>
      <p>Chẩn đoán và điều trị các bệnh về da, mụn, dị ứng, lão hóa và các liệu pháp thẩm mỹ da.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/phusan.jpg" alt="Sản phụ khoa">
      <h3>Sản phụ khoa</h3>
      <p>Chăm sóc sức khỏe sinh sản, thai kỳ và hỗ trợ điều trị vô sinh – hiếm muộn an toàn.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/thankinh.jpg" alt="Thần kinh">
      <h3>Thần kinh</h3>
      <p>Khám, điều trị các rối loạn thần kinh, đau đầu mãn tính, mất ngủ và stress kéo dài.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/hinhanh.jpg" alt="Chẩn đoán hình ảnh">
      <h3>Chẩn đoán hình ảnh</h3>
      <p>Thực hiện siêu âm, chụp X-quang, MRI và CT giúp chẩn đoán chính xác tình trạng bệnh.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>

    <div class="service-card">
      <img src="anh/nhakhoa.jpg" alt="Nha khoa">
      <h3>Nha khoa</h3>
      <p>Khám, điều trị, phục hình và làm đẹp răng miệng với thiết bị hiện đại, vô trùng tuyệt đối.</p>
      <button><a href="datlich.php" class="btn-primary">Đặt lịch ngay</a></button>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
