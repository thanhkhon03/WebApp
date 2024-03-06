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
$sql = "SELECT COUNT(*) as total_students FROM tbl_sinhvien";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $total_students = $row["total_students"];

    echo "Tổng số sinh viên là:" . $total_students;
} else {
    echo "Không có sinh viên nào trong cơ sở dữ liệu.";
}

// Đóng kết nối
$conn->close();

// Return the value
return $total_students;
?>
