<?php

	$addr = $_POST["addr"];
	$street = $_POST["street"];
	$postcode = $_POST["postcode"];
	$building_name = $_POST["building_name"];
	$area = $_POST["area"];
	$type = $_POST["type"];
	$deposit = $_POST["deposit"];
	$price = $_POST["price"];
	$admin = $_POST["admin"];
	$rs = $_POST["rs"];
	$ts = $_POST["ts"];
	$option = $_POST["option"];

  	echo "전달 받은 주소 : ", $addr, "<br>";
	echo "전달 받은 도로명 주소 : ", $street, "<br>";
	echo "전달 받은 우편번호 : ", $postcode, "<br>";
	echo "전달 받은 건물 이름 : ", $building_name, "<br>";
	echo "전달 받은 평수 : ", $area, "<br>";
	echo "전달 받은 유형 : ", $type, "<br>";
  	echo "전달 받은 보증금 : ", $deposit, "<br>";
	echo "전달 받은 가격 : ", $price, "<br>";
	echo "전달 받은 관리비 : ", $admin, "<br>";
	echo "전달 받은 방 개수 : ", $rs, "<br>";
	echo "전달 받은 화장실 개수 : ", $ts, "<br>";
	echo "전달 받은 옵션 : ", $option, "<br>";


?>