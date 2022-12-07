<?php
include 'database/konfig.php';
$query=mysqli_query($conn, "SELECT max(no_antrian) as max_code FROM tb_user limit 1");
$data = mysqli_fetch_array($query);
$kode = $data['max_code'];
// var_dump($data);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?php echo $data['max_code']; ?></h1>
</body>
<script>
   function printPage() {
      window.print();
   }
</script>
</html>
