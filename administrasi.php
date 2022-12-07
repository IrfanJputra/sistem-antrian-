<?php include 'template/navbar.php'; ?>
<?php include 'database/konfig.php'; ?>

<?php


//ambil data terbesar 
$huruf = 'A';
$query=mysqli_query($conn, "SELECT max(no_antrian) as max_code FROM tb_user");
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

				<div class="content">
					<div class="container-fluid">

                    <form method="post" action="simpan.php">
                       
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
						<div class="row">
                            <div class="col-md-4">
                            </div>
                        <div class="col-md-4">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="blue data-feather-big" stroke-width="3"
													data-feather="arrow-up-circle"></i>
                                                    <h4 class="mb-3">NO ANTRIAN</h4>
													
													<div class="">
													<input type="text" name="kode" class="form-control-lg text-center" value="<?php echo $newKode?>" readonly>
													<br>
													<br>
													</div>
													
													<button type="submit" value="Simpan" class="btn btn-danger mb-3">Cetak</button>
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

<?php include 'template/footer.php'; ?>