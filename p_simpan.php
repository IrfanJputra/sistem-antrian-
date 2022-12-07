<?php 
// https://www.malasngoding.com
// menghubungkan koneksi database
include 'database/konfig.php';
 
// menangkap data dari form
$kode = $_POST['kode'];
// menginput data ke table 
 
mysqli_query($conn,"INSERT INTO tb_pembayaran VALUES ('$kode')")or die(mysqli_error($conn));
 
// mengalihkan halaman kembali ke index.php
echo "<script> 
            alert('Silahkan Ambil Nomor Antrian Anda!');
            document.location.href = 'index.php';
        </script>
    ";
?>