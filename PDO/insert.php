<?php
require_once('connect_db.php');


// function createTable($pdo, $tableName)
// {
//     $sql = "CREATE TABLE IF NOT EXISTS $tableName (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         name VARCHAR(50) NOT NULL,
//         email VARCHAR(100) NOT NULL,
//         age INT
//     )";

//     try {
//         $pdo->exec($sql);
//         echo "Bảng '$tableName' đã được tạo thành công.\n";
//     } catch (PDOException $e) {
//         echo "Lỗi khi tạo bảng '$tableName': " . $e->getMessage() . "\n";
//     }
// }



// function insertData($pdo, $tableName, $name, $email, $age)
// {
//     $sql = "INSERT INTO $tableName (name, email, age) VALUES (:name, :email, :age)";

//     try {
//         $stmt = $pdo->prepare($sql);
//         $stmt->bindParam(':name', $name);
//         $stmt->bindParam(':email', $email);
//         $stmt->bindParam(':age', $age);
//         $stmt->execute();
//         echo "Dữ liệu đã được thêm vào bảng '$tableName' thành công.\n";
//     } catch (PDOException $e) {
//         echo "Lỗi khi thêm dữ liệu vào bảng '$tableName': " . $e->getMessage() . "\n";
//     }
// }
// $tableName = "users";
// createTable($connector, $tableName);
// insertData($connector, $tableName, "nam", "namvt@runsystem.net", "24");

// Hàm tạo bảng users
// function createUsersTable($pdo)
// {
//     $sql = "CREATE TABLE IF NOT EXISTS users (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         fullName VARCHAR(100) NOT NULL,
//         email VARCHAR(100) NOT NULL,
//         phone VARCHAR(20),
//         password VARCHAR(50) NOT NULL,
//         forgotToken VARCHAR(100),
//         activeToken VARCHAR(100),
//         create_at DATETIME DEFAULT CURRENT_TIMESTAMP,
//         update_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";

//     try {
//         $pdo->exec($sql);
//         echo "Bảng 'users' đã được tạo thành công.\n";
//     } catch (PDOException $e) {
//         echo "Lỗi khi tạo bảng 'users': " . $e->getMessage() . "\n";
//     }
// }

// // Hàm tạo bảng loginToken
// function createLoginTokenTable($pdo)
// {
//     $sql = "CREATE TABLE IF NOT EXISTS loginToken (
//         id INT AUTO_INCREMENT PRIMARY KEY,
//         user_Id INT NOT NULL,
//         token VARCHAR(100) NOT NULL,
//         FOREIGN KEY (user_Id) REFERENCES users(id) ON DELETE CASCADE
//     )";

//     try {
//         $pdo->exec($sql);
//         echo "Bảng 'loginToken' đã được tạo thành công.\n";
//     } catch (PDOException $e) {
//         echo "Lỗi khi tạo bảng 'loginToken': " . $e->getMessage() . "\n";
//     }
// }


// createUsersTable($connector);
// createLoginTokenTable($connector);

// Hàm thêm một user mới vào bảng users
function insertUser($pdo, $fullName, $email, $phone, $password, $forgotToken = null, $activeToken = null)
{
    $sql = "INSERT INTO users (fullName, email, phone, password, forgotToken, activeToken) 
            VALUES (:fullName, :email, :phone, :password, :forgotToken, :activeToken)";

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':fullName', $fullName);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':forgotToken', $forgotToken);
        $stmt->bindParam(':activeToken', $activeToken);

        $stmt->execute();
        echo "Thêm user thành công.\n";
    } catch (PDOException $e) {
        echo "Lỗi khi thêm user: " . $e->getMessage() . "\n";
    }
}
// Dữ liệu user cần thêm
$fullName = 'Nguyen Van A';
$email = 'nguyenvana@example.com';
$phone = '0123456789';
$password = password_hash('your_password', PASSWORD_BCRYPT); // Băm mật khẩu trước khi lưu
$forgotToken = null;
$activeToken = null;

insertUser($pdo, $fullName, $email, $phone, $password, $forgotToken, $activeToken);
