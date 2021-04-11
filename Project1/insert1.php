<?php
	$connect = mysqli_connect('127.0.0.1', 'root', 'root', 'project1');
	$insert = mysqli_query($connect, 'INSERT INTO project1 (Name,Number,Email,Klinika) VALUES ("'.$_GET['login'].'", "'.$_GET['number'].'", "'.$_GET['email'].'", "'.$_GET['klinika'].'")');
	header('Location: Project1.php');

 ?>