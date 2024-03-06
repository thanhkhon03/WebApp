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

// Truy vấn để lấy tổng số sinh viên
$sql = "SELECT COUNT(*) as total_subjects FROM tbl_hocphan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_subjects = $row["total_subjects"];

    echo "Tổng số học phần: " . $total_subjects;
} else {
    echo "Không có học phần nào trong cơ sở dữ liệu.";
}

// Đóng kết nối
$conn->close();

return $total_subjects;
?>
