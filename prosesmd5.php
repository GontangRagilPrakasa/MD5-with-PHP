<?php 
if(isset($_POST['login'])){
	include 'koneksi.php';
	$kata=$_POST['text'];
	$hash = md5($kata);
	$input=mysqli_query($konek,"INSERT INTO password VALUES('$kata','$hash')") or die (mysqli_error($konek));
	if($input){
		header('location:index.php');
	}
}
?>