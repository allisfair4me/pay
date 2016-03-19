<?php
          $con = mysql_connect("127.0.0.1","root","");
          if (!$con)
			  {
				  die('Could not connect: ' . mysql_error());
			  }
		  mysql_select_db("onepay", $con);
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$username = $_POST['username'];
			$email_id = $_POST['email_id'];
			$location = $_POST['location'];
			$phone = $_POST['phone'];
			$password = $_POST['password'];
		  $sql="INSERT INTO onepay_user VALUES('$fname','$lname','$username','$email_id','$location','$phone','$password')";
		  if (!mysql_query($sql,$con))
				  {
					  die('Error: ' . mysql_error());  
				  }
			if($_POST[cnf_pwd]<>$_POST[password]){
				echo "Password mismatch! <br/>";
			}
			echo "1 record added! <br/>";
			mysql_close($con);
			header('Location: http://127.0.0.1/onepay_login.xhtml');
?> 