<?php 
// https://www.malasngoding.com
// menghubungkan koneksi database
include 'database/konfig.php';
 
// menangkap data dari form
$kode = $_POST['kode'];
// menginput data ke table barang
 
mysqli_query($conn,"INSERT INTO tb_user VALUES ('$kode')")or die(mysqli_error($conn));
 
// mengalihkan halaman kembali ke index.php
echo "<script> 
            alert('Silahkan Ambil No. Antrian!');
            document.location.href = 'index.php';
        </script>
    ";
?>