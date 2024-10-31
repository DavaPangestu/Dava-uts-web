<?php
// Mengimpor koneksi database
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));

    // Validasi input
    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["success" => false, "message" => "Silakan isi semua kolom dan masukkan alamat email yang valid."]);
        exit;
    }

    // Menyiapkan dan mengeksekusi query untuk menyimpan data
    $sql = "INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, vars: $email, $message);

    if ($stmt->execute()) {
        // Jika berhasil, kembalikan respon sukses
        echo json_encode(['success' => true, 'message' => 'Pesan Anda telah terkirim!']);
    } else {
        // Jika gagal, kembalikan respon gagal
        echo json_encode(['success' => false, 'message' => 'Terjadi kesalahan saat mengirim pesan.']);
    }

    // Menutup koneksi
    $stmt->close();
    $conn->close();
} else {
    http_response_code(403);
    echo json_encode(["success" => false, "message" => "Ada masalah dengan pengiriman Anda, silakan coba lagi."]);
}
?>
