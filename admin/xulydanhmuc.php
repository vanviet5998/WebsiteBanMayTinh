<?php 
	 include "../db/connect.php";
	 if(isset($_POST['themdanhmuc'])){
	 	//them danh muc
	 	$tendanhmuc = $_POST['danhmuc'];
	 	$sql_insert = mysqli_query($con,"INSERT INTO tbl_category(category_name) values ('$tendanhmuc')");
	 }else if(isset($_POST['capnhatdanhmuc'])){
	 	$id_post = $_POST['id_danhmuc'];
	 	$tendanhmuc = $_POST['danhmuc'];
	 	$sql_update = mysqli_query($con,"UPDATE tbl_category SET $category_name ='$tendanhmuc' WHERE category_id ='$id_post'");
	 	header('Location:xulydanhmuc.php');
	 }
	 if(isset($_GET['xoa'])){
	 	$id = $_GET['xoa'];
	 	$sql_xoa =  mysqli_query($con,"DELETE FROM tbl_category WHERE category_id ='$id'");
	 	//xoa danh muc
	 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh mục</title>
	<link rel="icon" href="../assets/images/favicon.ico" type="image/png">
	<link href="../assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="dashboard.php"><img src="../assets/images/quanly1.png" alt="quanly"><strong>Quản lý </strong></a>	
			
			 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			 </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="xulydonhang.php"><img src="../assets/images/donhang1.png" alt="donhang" width="20">Đơn hàng<span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="xulydanhmuc.php"><img src="../assets/images/danhmuc.png" alt="danhmuc"  width="20">Danh mục</a>
			      </li>
			     <li class="nav-item">
			        <a class="nav-link" href="xulysanpham.php"><img src="../assets/images/sanpham.png" alt="sanpham"  width="30">Sản phẩm</a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="xulykhachhang.php"><img src="../assets/images/khachhang1.png" alt="khachhang" width="30">Khách hàng</a>
			      </li>
			    </ul>
			   
			  </div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
				<?php
				if(isset($_GET['quanly'])=='capnhat'){
					$id_capnhat = $_GET['id'];
					$sql_capnhat = mysqli_query($con,"SELECT * FROM tbl_category WHERE category_id='$id_capnhat'");
					$row_capnhat = mysqli_fetch_array($sql_capnhat);
					?>
					<div class="col-md-4 ">
						<h4>Cập nhật danh mục</h4>
						<label >Tên danh mục</label>
						<form action="" method="POST">
							<input type="text" class="form-control" name="danhmuc" value="<?php echo $row_capnhat['category_name']?>"><br>
							<input type="hidden" class="form-control" name="id_danhmuc" value="<?php echo $row_capnhat['category_id']?>"><br>
							<input type="submit" class="btn btn-default" name="capnhatdanhmuc"  value="Cập nhật danh mục">
						</form>
					
					</div>
				<?php
				}else{
					?>
					<div class="col-md-4 ">
						<h4>Thêm danh mục</h4>
						<label >Tên danh mục</label>
						<form action="" method="POST">
							<input type="text" class="form-control" name="danhmuc" placeholder="Tên danh mục"><br>
							<input type="submit" class="btn btn-default" name="themdanhmuc"  value="Thêm danh mục">
						</form>
					
					</div>
					<?php
				}
		
				?>
		
			<div class="col-md-8">
				<h4>Liệt kê danh mục</h4>
				<?php
				 	$sql_select = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");

				?>
				<table class="table table-bordered">
					<tr>
						<th>Thứ tự</th>
						<th>Tên danh mục</th>
						<th>Quản lý</th>
					</tr>
					<?php
						$i=0;
						while($row_category = mysqli_fetch_array($sql_select)){
							$i++;

					?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $row_category['category_name']?></td>
						<td><a href="?xoa=<?php echo $row_category['category_id']?>">Xóa</a>||<a href="?quanly=capnhat&id=<?php echo $row_category['category_id']?>">Cập nhật</a></td>
					</tr>
					<?php
						}
					?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>