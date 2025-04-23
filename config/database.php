<?php
$host = '192.168.28.128';
$db   = 'crud_demo'; // Đảm bảo tên database chính xác
$user = 'anh';      // Thử với user khác nếu cần
$pass = '123456';     // Mật khẩu MySQL của bạn (có thể là chuỗi rỗng '')
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Lỗi kết nối database: " . $e->getMessage());
}
?>