USE healthcare_system;

ALTER TABLE appointments
ADD COLUMN status ENUM('Chưa xác nhận', 'Đã xác nhận') DEFAULT 'Chưa xác nhận';
