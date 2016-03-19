<?php
	$con = mysql_connect("127.0.0.1","root","");
          if (!$con)
			  {
				  die('Could not connect: ' . mysql_error());
			  }
		  mysql_select_db("onepay", $con);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "select * from onepay_user where username='$username' and password='$password'";
	$result = mysql_query($sql,$con);
	$row = mysql_fetch_array($result);
	if($row){
		header('Location: http://127.0.0.1/profile.html');
	}else
		echo "Invalid!<br/>";
	mysql_close($con);
?>