<?php include('header.php'); ?>

<style>
.contact-section {
  max-width: 900px;
  margin: 50px auto;
  background: white;
  padding: 40px 50px;
  border-radius: 16px;
  box-shadow: 0 4px 25px rgba(0, 0, 0, 0.05);
  font-family: 'Inter', sans-serif;
  color: #0d1b2a;
}
.contact-section h2 {
  color: #0288D1;
  text-align: center;
  margin-bottom: 10px;
  font-size: 28px;
}
.contact-section p {
  text-align: center;
  color: #64748b;
  margin-bottom: 30px;
}
.contact-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
}
.contact-form input,
.contact-form textarea {
  width: 100%;
  padding: 12px 14px;
  border: 1px solid #cfd8dc;
  border-radius: 8px;
  font-size: 15px;
}
.contact-form textarea {
  grid-column: span 2;
  resize: vertical;
  height: 120px;
}
.contact-form button {
  grid-column: span 2;
  padding: 14px;
  background: #4FC3F7;
  color: white;
  font-size: 16px;
  border: none;
  border-radius: 8px;
  font-weight: 600;
  cursor: pointer;
  transition: 0.2s;
}
.contact-form button:hover {
  background: #0288D1;
}
.contact-info {
  margin-top: 40px;
  text-align: center;
  color: #37474F;
}
.contact-info div {
  margin: 8px 0;
  font-size: 16px;
}
@media (max-width: 768px) {
  .contact-form {
    grid-template-columns: 1fr;
  }
  .contact-form textarea,
  .contact-form button {
    grid-column: span 1;
  }
}
</style>

<div class="contact-section">
  <h2>📞 Liên hệ tư vấn</h2>
  <p>Hãy để lại thông tin, chúng tôi sẽ phản hồi trong thời gian sớm nhất!</p>

  <form class="contact-form" method="post" action="#">
    <input type="text" name="fullname" placeholder="Họ và tên" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="phone" placeholder="Số điện thoại">
    <input type="text" name="subject" placeholder="Chủ đề">
    <textarea name="message" placeholder="Nội dung tin nhắn..." required></textarea>
    <button type="submit">Gửi liên hệ</button>
  </form>

  <div class="contact-info">
    <div>🏥 Địa chỉ: Số 1 Phố Xốm, Hà Đông</div>
    <div>📧 Email: support@suckhoe.vn</div>
    <div>📞 Hotline: 9999 9999</div>
    <div>⏰ Giờ làm việc: 8:00 - 20:00 (Thứ 2 - Chủ Nhật)</div>
  </div>
</div>

<?php include('footer.php'); ?>
