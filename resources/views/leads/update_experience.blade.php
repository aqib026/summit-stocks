<?php 
date_default_timezone_set('America/New_York');

if ($_SERVER['HTTP_HOST'] == 'localhost'):
	$db = mysqli_connect('localhost', 'root','bitcoiin', 'stocks')
	or die ('Unable to connect to Database: ' . mysqli_error($db));
else:
	$db = mysqli_connect('localhost', 'wp_t1i3g','%m~KB7m3oD0n2uKG', 'wp_mlv9t')
	or die ('Unable to connect to Database: ' . mysqli_error($db));
	$db_name='patriot';
endif;

extract($_POST);

$query = "UPDATE leads SET experience='$experience' WHERE id = '$id'";
          mysqli_query($db,$query) or die(mysqli_error($db));
$last_insert_id = mysqli_insert_id($db);