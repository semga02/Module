<?php
$host='localhost';
$database='sport';
$userdb='root';
$password='';

 $link=mysqli_connect($host,$userdb,$password,$database) or die ("Ошибка" . mysqli_error($link));
	if(isset($_POST['Imya'])&& isset($_POST['Fam'])&& isset($_POST['Otch']) && isset($_POST['Login']) && isset($_POST['Password'])){
	$Imya=$_POST['Imya'];
	$Fam=$_POST['Fam'];
	$Otch=$_POST['Otch'];
	$Login=$_POST['Login'];
	$Password=$_POST['Password'];
	
		if($Imya && $Fam && $Otch && $Login && $Password){
		$query="insert into polzovat(Imya,Fam,Otch,Login,Password) values('$Imya','$Fam','$Otch','$Login','$Password')";
		$result=mysqli_query($link,$query) or die ("Ошибка" . mysqli_error($link));
		}
	}
?>

