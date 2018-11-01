<?php

	$con = mysqli_connect('127.0.0.1','root','','tama');
	if(!$con)
	{
		header("refresh:5; url=index.html");
		exit("Connection to server failed");
	}
	if(!mysqli_select_db($con,'tama'))
	{
		header("refresh:5; url=index.html");
		exit("Database not selected");
	}
	

	if(1>0) // name
	{
		
	if (isset($_REQUEST['name']))
	{
	  $Name = $_REQUEST['name'];
	}
	
	if(!$Name)
	{
		header("Location: sign-up.html?name=error1");
		exit();
	}
	else if($Name)
	{
		
		if(strpos($Name, ' ') !== false)
		{
			header("Location: sign-up.html?name=error3");
			exit();
		}
		
		$temp = $Name;
		$temp = str_replace("'" , "xx"  , $temp);
		$temp = str_replace("\\" , "xx"  , $temp);
		if(strlen($temp) != strlen($Name))
		{
			header("Location: sign-up.html?name=error5");
			exit();
		}
		
		$Name=(filter_var($Name, FILTER_SANITIZE_MAGIC_QUOTES)) ;
		$sql = "SELECT name FROM users WHERE name = '$Name';";
		
		$result = $con->query($sql);
		if ($result->num_rows > 0) 
		{
			header("Location: sign-up.html?name=error2");
			exit();
		}
		
		if(strlen($Name)>19)
		{
			header("Location: sign-up.html?name=error4");
			exit();
		}
		
	}
	
	}
	
	if(1>0) // email
	{
	if (isset($_REQUEST['email']))
	{
	  $Email = $_REQUEST['email'];
	}
	if (!$Email)
	{
		header("Location: sign-up.html?email=error1");
		exit();
	}
	else if($Email)
	{
		$temp = $Email;
		$temp = str_replace("'" , "xx"  , $temp);
		$temp = str_replace("\\" , "xx"  , $temp);
		if(strlen($temp) != strlen($Email))
		{
			header("Location: sign-up.html?email=error3");
			exit();
		}
		
		$Email=(filter_var($Email, FILTER_SANITIZE_MAGIC_QUOTES)) ;
		$sql = "SELECT email FROM users WHERE email = '$Email';";
		
		$result = $con->query($sql);
		if ($result->num_rows > 0) 
		{
			header("Location: sign-up.html?email=error2");
			exit();
		}
		if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
		{
            header("Location: sign-up.html?email=error3");
			exit();
        }
		
	}
	
	}
	
	if(1>0) // password
	{
	if (isset($_REQUEST['pass']))
	{
	  $Pass = $_REQUEST['pass'];
	}
	if(!$Pass)
	{
		header("Location: sign-up.html?pass=error1");
		exit();
	}
	else if($Pass)
	{		
		if($Pass == trim($Pass) && strpos($Pass, ' ') !== false)
		{
			header("Location: sign-up.html?pass=error3");
			exit();
		}
		$temp = $Pass;
		$temp = str_replace("'" , "xx"  , $temp);
		$temp = str_replace("\\" , "xx"  , $temp);
		if(strlen($temp) != strlen($Pass))
		{
			header("Location: sign-up.html?pass=error4");
			exit();
		}
		
		if(strlen($Pass)<6)
		{
			header("Location: sign-up.html?pass=error2");
			exit();
		}
	}
	
	}
	
	if(1>0) // re-pass
	{
	if (isset($_REQUEST['rePass']))
	{
	  $RePass = $_REQUEST['rePass'];
	}
	if(!$RePass)
	{
		header("Location: sign-up.html?rep=error1");
		exit();
	}
	else if($RePass)
	{		
		if(strcmp($Pass,$RePass))
		{
			header("Location: sign-up.html?rep=error2");
			exit();
		}
	}
	
	}

    $usrID = 0;
	$sql = "SELECT MAX(id) FROM users;";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$usrID = $row["MAX(id)"];
	
	$usrID = $usrID + 1;
	
	$Pass = password_hash($Pass, PASSWORD_DEFAULT);

	$sql = "INSERT INTO users VALUES ($usrID,'$Name','$Email','$Pass',1)";
		
	$result = $con->query($sql);

	
	header("Location: siteHTML_Created.html");

?>