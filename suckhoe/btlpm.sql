-- 🏥 Tạo mới database
DROP DATABASE IF EXISTS healthcare_system;
CREATE DATABASE healthcare_system CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE healthcare_system;

-- 👥 Bảng người dùng
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL UNIQUE,
  email VARCHAR(100) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  role ENUM('user', 'admin') DEFAULT 'user',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 🩺 Bảng lịch hẹn
CREATE TABLE appointments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  fullname VARCHAR(100),
  phone VARCHAR(20),
  service VARCHAR(100),
  appointment_date DATE,
  note TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 💬 (Tùy chọn) Thêm bảng phản hồi bệnh nhân
CREATE TABLE feedbacks (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  message TEXT,
  rating INT CHECK (rating BETWEEN 1 AND 5),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 👑 Thêm tài khoản admin mặc định
INSERT INTO users (username, email, password, role)
VALUES ('admin', 'admin@health.com', MD5('admin123'), 'admin');
