<?php
// Konfigurasi database
$host = 'localhost'; // atau server database kamu
$db = 'portfolio_db'; // nama database yang telah kamu buat
$user = 'root'; // username MySQL (default: root untuk server lokal)
$pass = ''; // password MySQL (kosong untuk server lokal)

try {
    // Koneksi ke database menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Cek jika form disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil data dari form
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // SQL untuk menyimpan data
        $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $pdo->prepare($sql);

        // Bind parameter dan eksekusi query
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // Eksekusi query
        if ($stmt->execute()) {
            echo "Pesan berhasil dikirim!";
        } else {
            echo "Terjadi kesalahan saat mengirim pesan.";
        }
    }
} catch (PDOException $e) {
    echo "Koneksi gagal: " . $e->getMessage();
}
?>
