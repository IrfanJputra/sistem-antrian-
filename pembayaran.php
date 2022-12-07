

<?php include 'template/navbar.php'; ?>
<?php include 'database/konfig.php'; ?>

<?php


//ambil data terbesar 
$huruf = 'T';
$query=mysqli_query($conn, "SELECT max(no_antrian) as max_code FROM tb_pembayaran");
$data = mysqli_fetch_array($query);
$kode = $data['max_code'];

//mengambil data menggunakan fungsi subtr, 
//misal data BRG001 akan diambil 001 
$urutan = (int)substr($kode, 1, 3);

//setelah substring bilangan diambil lantas dicasting menjadi integer
 $urutan++;
//perintah sprintf("%03s", $no) berguna untuk membuat string menjadi 3 karakter
$newKode = $huruf . sprintf("%03s", $urutan);

?>
<style type="text/css">
@media print {
  #printPageButton {
    display: none;
  }
  #logo{
	display: none;
  }
  .card{
	border: 0px;
	box-shadow: none;
  }
  .navbar{
	display: none;
  }
}

#nomorAntri{
	font-size: 40px;
	font-weight: bold;
	/* border: 10px; */
	 width: 200px;
     height: 200px;
     text-align: center;
	 font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
	
}

.navbar{
	display: none;
  }

</style>
				<div class="content">
					<div class="container-fluid">

                    <form method="post" action="p_simpan.php">
                       
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
						<div id="konten">
						<div class="row">
                            <div class="col-md-4">
                            </div>
                        <div class="col-md-4">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i id="logo" class="blue data-feather-big" stroke-width="3"
													data-feather="arrow-up-circle"></i>
                                                    <h4 class="mb-3">NO ANTRIAN</h4>
													
													<div class="">
													<input id="nomorAntri" type="text" name="kode" class="form-control-lg text-center" value="<?php echo $newKode?>" readonly>
													<br>
													<br>
													</div>
													
													<button id="printPageButton"  type="submit" value="Simpan" class="btn btn-danger mb-3" onClick="printPage('konten')" >Cetak</button>
											</div>
										</div>

									</div>
								</div>
							</div>

						</div>
						</div>
						</form>
						</div>

					</div>

				</div>

			</div>

		</div>
	</div>
	<script>
   function printPage() {
      window.print();
   }
	</script>

<?php include 'template/footer.php'; ?>