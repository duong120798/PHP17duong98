
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đinh Xuân Dương</title>
</head>
<body>
	<?php 
	$name="dinh xuan duong";
	$str_explode= explode(" ", $name);
	$chuanHoanTen="";

	for ($i=0; $i <count($str_explode) ; $i++) { 
		$subtr1=substr($str_explode[$i],0,1);
		$subtr2=substr($str_explode[$i],1,strlen($str_explode[$i]));
		$chuCaiDau = strtoupper($subtr1);
		$chuCaiCuoi= strtolower($subtr2);
		$tu = $chuCaiDau .$chuCaiCuoi ;
		$chuanHoanTen=$chuanHoanTen ." " .$tu;
	}

	$themDauCham = $chuanHoanTen .".";
	echo $themDauCham;

	// function chuanHoanTen($name){

	// }	
	?>
</body>
</html>