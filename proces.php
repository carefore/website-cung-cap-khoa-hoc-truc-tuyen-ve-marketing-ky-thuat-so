<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost"; // Thay đổi tùy theo cài đặt của bạn
$username = "username"; // Thay đổi tùy theo cài đặt của bạn
$password = "password"; // Thay đổi tùy theo cài đặt của bạn
$dbname = "courses_db"; // Thay đổi tùy theo cài đặt của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$course = $_POST['course'];

// Chèn dữ liệu vào bảng trong cơ sở dữ liệu
$sql = "INSERT INTO registrations (fullname, email, course) VALUES ('$fullname', '$email', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Đăng ký thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>
