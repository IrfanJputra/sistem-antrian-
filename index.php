<?php include 'template/navbar.php'; ?>
<style type="text/css">
  .navbar{
	display: none;
  }
</style>
<div class="settings">
					<div class="modal fade" id="settingsModal"
						aria-labelledby="settingsModalTitle" aria-hidden="true"
						tabindex="-1">
						<!-- 				 data-bs-backdrop="static" data-bs-keyboard="false" -->
						<div class="modal-dialog modal-dialog-settings">
							<div class="modal-content">
								<div class="modal-header text-center">
									<h5 class="modal-title" id="exampleModalLabel">Settings</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
										aria-label="Close"></button>
								</div>
								<div class="modal-body">

									<section id="logincontent" class="shiftdown">

										<div class="row g-3 mb-3 mt-3">

											<div class="col-md-6">
												<h6 class="text-muted">Select Color</h6>
												<span onclick="changeColor('0')"
													class="btn btn-sm btn-primary rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('1')"
													class="btn btn-sm btn-success rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('2')"
													class="btn btn-sm btn-danger rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('3')"
													class="btn btn-sm btn-warning rounded-circle"><span
													class="me-2"></span></span> <span onclick="changeColor('4')"
													class="btn btn-sm btn-secondary rounded-circle"><span
													class="me-2"></span></span>
												<div class="d-flex justify-content-between">
													<button onclick="removeColorCookie()">Reset to
														Default</button>
												</div>
											</div>
											<div class="col-md-6">
												<h6 class="text-muted">Preferences</h6>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckDefault"> <label
														class="form-check-label" for="flexSwitchCheckDefault">Switch
														option 1</label>
												</div>
												<div class="form-check form-switch">
													<input class="form-check-input" type="checkbox"
														id="flexSwitchCheckChecked" checked> <label
														class="form-check-label" for="flexSwitchCheckChecked">Switch
														option 2</label>
												</div>
											</div>
										</div>
										<div class="row g-3 mb-3 mt-3">
											<div class="col-md-6">
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value=""
														id="defaultCheck1" checked> <label
														class="form-check-label" for="defaultCheck1">
														Checkbox 1 </label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="checkbox" value=""
														id="defaultCheck2"> <label
														class="form-check-label" for="defaultCheck2">
														Checkbox 2</label>
												</div>
											</div>
											<div class="col-md-6">
												<h6 class="text-muted">View Size</h6>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="flexRadioDefault" id="radioCompactView"> <label
														class="form-check-label" for="radioCompactView">
														Compact</label>
												</div>
												<div class="form-check">
													<input class="form-check-input" type="radio"
														name="flexRadioDefault" id="radioFullView"> <label
														class="form-check-label" for="radioFullView">
														Full-screen </label>
												</div>
												<div class="d-flex justify-content-between">
													<button onclick="removeViewSizeCookie()">Reset to
														Default</button>
												</div>

											</div>
										</div>
										<hr />
										<button class="btn btn-sm btn-danger" data-bs-dismiss="modal"
											type="button">
											<i data-feather="check-circle" class="mr-1"></i> Ok
										</button>
									</section>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="sidebarOverlayNav" class="screen-overlay float-end">
					<a href="javascript:void(0)" class="closebtn"
						onclick="closeOverlayNav()">&times;</a>
					<div class="screen-overlay-content text-secondary">
						<a href="#" class="active">About</a> <a href="#">Services</a> <a
							href="#">Clients</a> <a href="#">Contact</a>
					</div>
				</div>


				<div class="content">
					<div class="container-fluid">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>

						<div class="row">

                        <div class="col-sm-6 col-md-6 col-lg-3">
                        </div>

                        <div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="blue data-feather-big" stroke-width="3"
													data-feather="arrow-up-circle"></i>
                                                    <a href="pembayaran.php"><h4 class="mb-0">Pembayaran</h4></a>
												<p class="text-muted">Antrian</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6 stats">
													<i data-feather="calendar"></i> This Week
												</div>
												<div class="col-md-6">
													<a class="text-primary float-end" href="#"><i
														class="blue" data-feather="chevrons-right"></i>See Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>


                            <div class="col-sm-6 col-md-6 col-lg-3">
								<div class="card card-rounded">
									<div class="content">
										<div class="row">
											<div class="dfd text-center">
												<i class="blue data-feather-big" stroke-width="3"
													data-feather="file"></i>
                                                    <a href="administrasi.php"><h4 class="mb-0">Administrasi</h4></a>
												<p class="text-muted">Antrian</p>
											</div>
										</div>
										<div class="footer">
											<hr />
											<div class="d-flex justify-content-between box-font-small">
												<div class="col-md-6 stats">
													<i data-feather="calendar"></i> This Week
												</div>
												<div class="col-md-6">
													<a class="text-primary float-end" href="#"><i
														class="blue" data-feather="chevrons-right"></i>See Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						</div>

					</div>

				</div>

			</div>

		</div>
	</div>

<?php include 'template/footer.php'; ?>