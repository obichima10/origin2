<?php
$cn=mysqli_connect("localhost","root","","quiz_new") or die("Could not Connect My Sql");
mysqli_select_db($cn,"quiz_new")  or die("Could connect to Database");
?>
