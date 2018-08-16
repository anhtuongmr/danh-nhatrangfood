<div class="thongtin-datban">
<h1>trang dat ban</h1>
	<i class="fa fa-times-circle icon-thoat" aria-hidden="true"></i>
	<h3>Mời quý khách chọn ngày giờ đặt tại <?php foreach ($quanan as $row): ?>
		<h3 class="name"><?php echo $row['TenQuanAn'] ?></h3>
	<?php endforeach ?></h3>
	<div class="container thongtin-nhahang">
		<div class="row">
			<div class="col-sm-4">
				<img class="thongtin-datban-hinhanh" src="public/images/<?php echo $row['UrlHinhAnh'] ?>" alt="">
			</div> <!-- end col-sm-4 -->
			<div class="col-sm-8">
				<div class="row">
					<div class="col-sm-4">
						Ngày đặt
						<input class="date" type="date">
					</div>
					<div class="col-sm-4">
						Giờ đặt
						<input class="time" type="time" value="now">
					</div>
					<div class="col-sm-4">
						Số bàn
						<input class="people" type="number" name="quantity" min="1" max="100">
					</div>
				</div> <!-- end row -->
				<div class="row">
					<div class="col-sm-3">
						Tên quán:
					</div>
					<div class="col-sm-9">
						<div class="thongtin-nhahang-name">
							Nhà hàng Lạc Cảnh
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						Địa chỉ:
					</div>
					<div class="col-sm-9">
						<div class="thongtin-nhahang-place">
							2/4, Vĩnh Hải, Nha Trang
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						Thời gian hoạt động:
					</div>
					<div class="col-sm-9">
						<div class="thongtin-nhahang-realtime">
							6:00 - 22:00
						</div>
					</div>
				</div>
				<div class="row">
					<div class="thongtin-nhahang-evaluate">
						<div class="col-sm-12"><h4>Đánh giá</h4></div>
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-8">
									<label class="thanh-range" for=""><h4 class="dg">Chất lượng</h4> <h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<label class="thanh-range" for=""><h4 class="dg">Giá cả</h4> <h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
									<!-- onchange="alert(document.getElementById('cl').value);" -->
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<label class="thanh-range" for=""><h4 class="dg">Vị trí</h4><h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<label class="thanh-range" for=""><h4 class="dg">Phục vụ</h4><h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<label class="thanh-range" for=""><h4 class="dg">không gian</h4><h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
								</div>
							</div>
						</div>

					</div>
				</div> <!-- end row -->
			</div> <!-- end col-sm-8 -->
		</div> <!-- end row -->

	</div><!--  end container thongtin-nhahang -->
</div> <!-- thongtin-datban -->
<div class="layer-black"></div>





<!-- box dat ban -->
<!-- <div class="container">
				<h2>Đặt bàn</h2>
				<!-- Modal -->
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h4 class="modal-title">Modal Header</h4>
							</div>
							<div class="modal-body">
								<p>Some text in the modal.</p>
								<div class="container thongtin-nhahang">
									<div class="row">
										<div class="col-sm-4">
											<img class="thongtin-datban-hinhanh" src="public/images/<?php echo $row['UrlHinhAnh'] ?>" alt="">
										</div> <!-- end col-sm-4 -->
										<div class="col-sm-8">
											<div class="row">
												<div class="col-sm-4">
													Ngày đặt
													<input class="date" type="date">
												</div>
												<div class="col-sm-4">
													Giờ đặt
													<input class="time" type="time" value="now">
												</div>
												<div class="col-sm-4">
													Số bàn
													<input class="people" type="number" name="quantity" min="1" max="100">
												</div>
											</div> <!-- end row -->
											<div class="row">
												<div class="col-sm-3">
													Tên quán:
												</div>
												<div class="col-sm-9">
													<div class="thongtin-nhahang-name">
														<?php echo $row['TenQuanAn'] ?>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													Địa chỉ:
												</div>
												<div class="col-sm-9">
													<div class="thongtin-nhahang-place">
														<?php echo $row['DiaChi'] ?>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-3">
													Thời gian hoạt động:
												</div>
												<div class="col-sm-9">
													<div class="thongtin-nhahang-realtime">
														<?php echo $row['GioHoatDong'] ?>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="thongtin-nhahang-evaluate">
													<div class="col-sm-12"><h4>Đánh giá</h4></div>
													<div class="col-sm-12">
														<div class="row">
															<div class="col-sm-8">
																<label class="thanh-range" for=""><h4 class="dg">Chất lượng</h4> <h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<label class="thanh-range" for=""><h4 class="dg">Giá cả</h4> <h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
																<!-- onchange="alert(document.getElementById('cl').value);" -->
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<label class="thanh-range" for=""><h4 class="dg">Vị trí</h4><h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<label class="thanh-range" for=""><h4 class="dg">Phục vụ</h4><h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-8">
																<label class="thanh-range" for=""><h4 class="dg">không gian</h4><h4 class="dg dg-diem" id="dg-diem"></h4><input id="cl" type ="range" min ="0" max="10" step ="0.5" value ="10" onclick="show_diem_dg()"  /></label>
															</div>
														</div>
													</div>

												</div>
											</div> <!-- end row -->
										</div> <!-- end col-sm-8 -->
									</div> <!-- end row -->

								</div><!--  end container thongtin-nhahang -->
							</div> <!-- thongtin-datban -->
						</div>
						<div class="modal-footer">
							<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
						</div>
					</div>

				</div>
			</div> -->