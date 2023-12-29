<!-- add-blogs.php -->

<?php
include('db/config.php');
include('includes/header.php');
include('lock2.php');

if (isset($_POST['add-blog'])) {

	$category = $_POST['category'];
	$is_active = ($_POST['is_active'] != '' ? 1 : 2);

	$query = mysqli_query($conn, "insert into cost_calculator_category
    	                                             SET cost_category_name='$category',
    	                                                  is_active=$is_active");

	if ($query) {
		header('Location:manage-home-use.php');
	}
}
?>

