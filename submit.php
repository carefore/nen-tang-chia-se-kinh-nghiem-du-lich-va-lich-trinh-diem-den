<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ten_csdl";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối đến CSDL thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ POST request
$destination = $_POST['destination'];
$experience = $_POST['experience'];

// Chuẩn bị truy vấn SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO travel_experiences (destination, experience) VALUES ('$destination', '$experience')";

if ($conn->query($sql) === TRUE) {
  echo "Thông tin đã được lưu thành công!";
} else {
  echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối đến CSDL
$conn->close();
?>
