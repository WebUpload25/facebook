<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // সরাসরি পাসওয়ার্ড সংরক্ষণ (অনিরাপদ)

    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        echo "রেজিস্ট্রেশন সফল! ✅";
    } else {
        echo "সমস্যা হয়েছে: " . $conn->error;
    }
}
?>
