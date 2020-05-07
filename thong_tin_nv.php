<?php
    require 'ketnoi.php';

    $sql="SELECT * FROM `nhanvienst`";
    $tv=mysqli_query($x,$sql);
   

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông tin nhân viên </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <link rel="shortcut icon" type="text/css" href="image/logo_vimart.png">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  <link type="text/css" rel="stylesheet" href="fontawesome-free-5.13.0-web/fontawesome-free-5.13.0-web/css/fontawesome.min.css" />

</head>
<body>
	<h1 class="text-center" style="font-family: cursive;font-weight: bold;">Thông tin nhân viên</h1>
	<table border="1px" class="table table-striped" style="font-family:cursive;font-weight: bold;">
	<thead>
		<tr>
			<td>Mã Nhân viên</td>
			<td>Họ tên nhân viên</td>
			<td>Ngày Sinh</td>
			<td>Gioi tính</td>
			<td>CMND</td>
			<td>Địa chỉ</td>
			<td>ĐIện thoại</td>
			<td>Ngày vào làm</td>
			<td>Mã Chức vụ</td>
			<td>Tên đăng nhập</td>
			
		</tr>
	</thead>
	<tbody>
		
		<?php
		    if(mysqli_num_rows($tv)>0){
		    	while($y=mysqli_fetch_assoc($tv)){
		    		$id=$y['MaNV'];
		    		$name=$y['HoTen'];
		    		$date=$y['NgaySinh'];
		    		$GioiTinh=$y['GioiTinh'];
		    		$cmnd=$y['CMND'];
		    		$diachi=$y['DiaChi'];
		    		$dienthoai=$y['DienThoai'];
		    		$ngayvaolam=$y['NgayVaoLam'];
		    		$machucvu=$y['MaCV'];
		    		$username=$y['TenDangNhap'];
		    		echo "<tr>
		    		           <td>".$id."</td>
		    		           <td>".$name."</td>
		    		           <td>".$date."</td>
		    		           <td>".$GioiTinh."</td>
		    		           <td>".$diachi."</td>
		    		           <td>".$dienthoai."</td>
		    		           <td>".$ngayvaolam."</td>
		    		           <td>".$machucvu."</td>
		    		           <td>".$username."</td>

		    		      </tr>

		    		";
		    	}
		    }
		?>
		</tbody>
	</table>
</body>
</html>