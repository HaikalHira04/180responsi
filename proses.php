<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nomor = $_POST['nomor'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $data = "Nama: $nama, Nomor Telepon: $nomor, Tanggal: $tanggal, Jam: $jam\n";

    file_put_contents('janji_temuan.txt', $data, FILE_APPEND);

    header('Location: janji_temu.php');
    exit();
}
?>
