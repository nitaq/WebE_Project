<?php

	$db = mysqli_connect('localhost', 'root', '', 'dbportfolio');

	if(isset($_GET['del']))
	{
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM tbl_gallery where image_id=$id");
		header('location:manage_gallery.php');
	}
  
?>