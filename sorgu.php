<?php

	$kuladi="faatmaanurdemir@gmail.com";
	$sifre="123";

	if ($_POST["mail"]==$kuladi and $_POST["sifre"]==$sifre) {
		header("location:giris.php?durum=girildi");	
	}
	else{

		header("location:giris.php?durum=hatali");
	}
?>