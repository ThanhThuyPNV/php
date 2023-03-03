<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$day = 4;
	if($day==1){
		echo "Visit Father";
	}elseif($day==2){
		echo "Visit Mother";
	}elseif($day==3){
		echo "Visit Teacher";
	}elseif($day==4){
		echo "Visit Friend";
	}elseif($day==5){
		echo "Visit Stay at home";
	}elseif($day==6){
		echo "Visit Go back PNV";
	}else{
		echo "Visit Sleep";
	}
	// $day = 2;
	// switch("$day"){
	// 	case 1: "Visit Father";
	// 	break;
	// 	case 1: "Visit Mother";
	// 	break;
	// 	case 1: "Visit Teacher";
	// 	break;
	// 	case 1: "Visit Friend";
	// 	break;
	// 	case 1: "Visit Stay at home";
	// 	break;
	// 	case 1: "Visit Sleep";
	// 	break;
	// }
	?>
</body>
</html>