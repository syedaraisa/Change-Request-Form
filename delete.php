<?php
include 'connect.php';
require_once 'helper.php';
if(isset($_GET['deleteid'])){
	$id=$_GET['deleteid'];

	$sql="delete from `request_form` where id=$id";
	$result= mysqli_query($conn,$sql);
	if($result){
		//echo "Deleted successfully";
		header('location:list.php');
    }else{
    	die(mysql_error($conn));
    }
    

}

?>