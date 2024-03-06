<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "ptudw_16";
$password = "12345678";
$dbname = "qldsv_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Truy vấn để lấy tổng số sinh viên có điểm trung bình lớn hơn 8.0
$sql = "SELECT COUNT(*) as total_excellent FROM tbl_diemhocphan 
        WHERE (A * 0.6 + B * 0.3 + C * 0.1) > 8.0";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    $total_excellent_high_avg = $row["total_excellent"];

    echo "Tổng số sinh viên có điểm trung bình lớn hơn 8.0: " . $total_excellent_high_avg;
} else {
    echo "Có lỗi trong truy vấn: " . $conn->error;
}

// Đóng kết nối
$conn->close();

return $total_excellent_high_avg;
?>

