<?php include('header.php'); ?>

<style>
.doctor-section {
  max-width: 1100px;
  margin: 50px auto;
  text-align: center;
  font-family: 'Inter', sans-serif;
  color: #0d1b2a;
}
.doctor-section h2 {
  color: #0288D1;
  font-size: 28px;
  margin-bottom: 10px;
}
.doctor-section p {
  color: #64748b;
  margin-bottom: 40px;
}
.doctor-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}
.doctor-card {
  background: white;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
  padding: 20px;
  transition: 0.3s;
}
.doctor-card:hover {
  transform: translateY(-6px);
  box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
}
.doctor-card img {
  width: 100%;
  border-radius: 12px;
  height: 260px;
  object-fit: cover;
}
.doctor-card h3 {
  margin: 15px 0 6px;
  color: #0288D1;
  font-size: 18px;
}
.doctor-card span {
  color: #37474F;
  font-weight: 500;
}
</style>

<div class="doctor-section">
  <h2>👨‍⚕️ Đội ngũ bác sĩ chuyên khoa</h2>
  <p>Chúng tôi tự hào sở hữu đội ngũ bác sĩ giàu kinh nghiệm, tận tâm và chuyên nghiệp trong từng lĩnh vực.</p>

  <div class="doctor-list">
    <div class="doctor-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRva1WkepSoHO-I7JVw4AAuNaXVj_py8zPHwg&s" alt="Bác sĩ A">
      <h3>BS. Nguyễn Minh Anh</h3>
      <span>Chuyên khoa Tim mạch</span>
    </div>
    <div class="doctor-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwHS2Uulwp2XCJ44kRYimeK6mxWxuxFGrxvg&s" alt="Bác sĩ B">
      <h3>BS. Lê Thị Hồng</h3>
      <span>Chuyên khoa Nhi</span>
    </div>
    <div class="doctor-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQWzm605An6GTGOh61U0Ws2ATRAzXVyh0KIg&s" alt="Bác sĩ C">
      <h3>BS. Trần Quang Huy</h3>
      <span>Chuyên khoa Da liễu</span>
    </div>
    <div class="doctor-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRtRHzpxNtAaEyU02GvlF_pJQu3LqpjbK3OXA&s" alt="Bác sĩ D">
      <h3>BS. Phạm Thị Mai</h3>
      <span>Chuyên khoa Nội tổng quát</span>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
