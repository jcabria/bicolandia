<?php

$NAME=$_POST['NAME'];
$COMMENT=$_POST['COMMENT']

$con=mysql_connect("localhost", "root", "") or die ("A connection to the server could not be established!");
$result=mysql_select_db("comment") or die ("Database Mytestdb was successfully selected.");
$query="INSERT INTO `capstone1`.`comment` (`name`, `cmt`) VALUES ('$NAME', '$COMMENT')";

$result=mysql_query($query) or die ("ERROR IN QUERY");
	echo'<br><h4 align=center>COMMENT SUCCESSFULLY SUBMITTED!</h4><br><br>';
	echo'<br><center><a href="index.html"><h3>BACK TO HOME/h3></a></center>';

?>