
<!-- navigation -->



	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<!-- <div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Danh mục sản phẩm</option>
						 	<?php

	
								 $sql_category = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC'); 

								 while($row_category =mysqli_fetch_array($sql_category)){
								 

								
							?>  
							<!-- <option value="Televisions"><?php //echo $row_category = ['category_name'];?>Televisions</option> -->
							<option value="<?php echo $row_category['category_id'];?>">
							<a href="?quanly=danhmuc&id=<?php echo $row_category['category_id'];?>"><?php echo $row_category['category_name'];?>
								
							</a></option>
							<!-- <option value="Appliances">Appliances</option> -->
							<!-- <option value="maybodell">Máy bộ Dell</option>
							
							<option value="maybohp">Máy bộ HP</option>
							<option value="banphim">Bàn phím </option>
							<option value="chuot">Chuột</option> -->
							 <!-- <?php
								}
							?> 
						</select>
					</form>ml-auto
				</div> 
			--> 
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav  text-center mr-xl-5">
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Trang chủ
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Danh mục
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									
									<div class="row">
										<div class="col-sm-6 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<?php
														 $sql_category_danhmuc = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC'); 

														 while($row_category_danhmuc =mysqli_fetch_array($sql_category_danhmuc )){
														
													?>  
													<a href="?quanly=danhmuc&id=<?php echo $row_category_danhmuc['category_id'];?>"><?php echo $row_category_danhmuc['category_name'];?><?php "<br>"?></a>
													<?php
														}
														
													?>
												</li>
												
												
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</li>
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<?php
								$sql_danhmuctin = mysqli_query($con,"SELECT * FROM tbl_danhmuctin ORDER BY danhmuctin_id DESC");
							?>
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tin tức
							</a>
							<div class="dropdown-menu">
								<?php
									while($row_danhmuctin = mysqli_fetch_array($sql_danhmuctin)){
								?>
								<a class="dropdown-item" href="?quanly=tintuc&id_tin=<?php echo $row_danhmuctin['danhmuctin_id'];?>"><?php echo $row_danhmuctin['danhmuctin_ten'];?></a>
								<?php
									}
								?>
							</div>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Tra cứu
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="#">Sản phẩm</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#">Kiểm tra hàng</a>
								<a class="dropdown-item" href="#">Thanh toán</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Liên hệ</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->