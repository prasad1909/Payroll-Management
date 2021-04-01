<?php
	$c= mysqli_connect('localhost', 'root', 'Praraj19','payroll');

	if (!$c)
	{
		die("Database Connection Failed" . mysqli_error());
	}

?>