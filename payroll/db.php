<?php
	$c= mysqli_connect('localhost', 'root', '','payroll');

	if (!$c)
	{
		die("Database Connection Failed" . mysql_error());
	}

?>