<?php 
 $servername='localhost';
 $username='root';
 $password='';
 $database='Matchmaking';

 $conn =mysqli_connect($servername, $username, $password,$database) or die("cannot connect to database".mysql_connect_error());
 	
 ?>