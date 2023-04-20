<?php 
session_start();
//error_reporting(E_ERROR | E_PARSE);
ini_set('display_errors', 1);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//ini_set('display_startup_errors', 1);

// CALL AUTHENTICATION CHECK

//include ('authentication.php');


?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
 <link rel="stylesheet" href="1clickschools.css" type="text/css"/>


<style type="text/css">
.style691 {color: #333333}
.style701 {font-size: 14px; font-weight: bold; font-family: Arial, Helvetica, sans-serif;}
.style661 {font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	font-weight: bold;
	color: #000000;
}
.style72 {color: #000000}
</style>
</head>

<body>
<?php //include ('topbarlogin.php')?>
<br />


<table width="987" border="0" background="files/mainbg.png" align="center">
  <tr>
    <td width="981" height="790" align="center" valign="top" bgcolor=""><table width="984" border="0">
      <tr>
        <td width="12" height="23" valign="top">&nbsp;</td>
        <td width="751" align="right" valign="baseline"><?php
 
  
  include("db.php");
  

  print $_POST["username"];
  print "<br><br>";
 print $_POST["password"];
 print "<br><br>";

			
			
 $username = $_POST['username'];
 
 //$username = mysql_real_escape_string($username);
  
 
 $password = md5($_POST["password"]);
 
 $resetpass ='';
 
 // print $password;


$pass_check = "select id, name, username, password, pass_change, status from participant where username = '$username' and password = '$password'";
 
			print $pass_check;

			 print "<br><br>";
			  print "<br><br>";
			
	
			
try {
        // Try Connect to the DB with mysqli_connect function - Params {hostname, userid, password, dbname}
      $resultcheck =  mysqli_query($link, $pass_check);
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }
			
			
			

		$login_result ='NO';	
			
	while ($row = mysqli_fetch_assoc($resultcheck))
		   
		   {
        
			print "passcheck entre";
			 print "<br><br>";
			  print "<br><br>";
	 
			$resetpass = $row['pass_change'];
			$id_user = $row['id'];
			$name = $row['name'];
			$acc_status = $row['status'];
			$login_result ='YES';


  }
  

if ($login_result =='NO')


{
    
    	mysqli_close ($link);	

$_SESSION['source'] = 'NOLOGIN';
//include('system_parent_msg.php');


?>
          <script>
	alert ("Username and Password do not Match.")
	document.location.href ="login.php";
	      </script>
          <?php

   exit; 
    
}











			
			
    if ($acc_status == 'INACTIVE')
					  
					  {
						  
						  
						  ?>
						  
							   <script>
						//alert ("Your account has been temporally locked - Please contact a school representative for more information.")
						document.location.href ="no_access.php";
							  </script>
						  
						  
						  
						  <?php
						  
						  
						  					  
						  
					  }
  
  
  if ($resetpass == '1')
  
  
  {
	  
	  
	 $_SESSION["validated_reset"]= "YES"; 
	


	$_SESSION["username"]= $_POST["username"];
	
	$_SESSION["id_user"] = $id_user_parent;
	
	$_SESSION['name'] = $name;
	
	$browser = $_SERVER["HTTP_USER_AGENT"];
$ipaddress = $_SERVER["REMOTE_ADDR"];

$_SESSION["hostip"] = $ipaddress;

$_SESSION["browser"] = $browser;

$_SESSION['id_school'] = $school;
	  
	  ?>
      
	       <script>
	alert ("First Login - You must change your Password before continue")
	document.location.href ="change_me.php";
	      </script>
      
      
      
          <?php
	  
	  
	  
  }
  
  
  
  
  else
  
  
  
  {
	  
	  
   print "<br><br>";
   echo "regular login";
    print "<br><br>";
 

$q_result =  "select username, password from participant where username = '$username' and password = '$password' and status ='ACTIVE'";
$recordsnum=mysqli_num_rows($q_result);

print $q_result;

 print "<br><br>";

if (isset($q_result)){ 
//USER VALIDATED 
    //SESSION CREATED 


print "validated yes";

	$_SESSION["validated"]= "YES"; 
	


	$_SESSION["username"]= $_POST["username"];
	
	

	
	
		
$sql ="select id, name, lastname, role from participant where username = '$_POST[username]'";
print $sql;
				
//if(!$resultcheck) die ($sql.' failed. <p>Error: '.$mysqli->error);
	
	
			
try {
        // Try Connect to the DB with mysqli_connect function - Params {hostname, userid, password, dbname}
      $resultcheck2 =  mysqli_query($link, $sql);
    } catch (mysqli_sql_exception $e) { // Failed to connect? Lets see the exception details..
        echo "MySQLi Error Code: " . $e->getCode() . "<br />";
        echo "Exception Msg: " . $e->getMessage();
        exit; // exit and close connection.
    }
			
			
			

			
			
	while ($row = mysqli_fetch_assoc($resultcheck2))
	
	
{
			echo  "entreeeeeeeee role"; 
	$_SESSION['id_user'] = $row["id"];

	$_SESSION['name'] = $row["name"];
	$_SESSION['lastname'] = $row["lastname"];
	$_SESSION['role'] = $row["role"];
	


  }
  

			

	print "ROLE" . $_SESSION['role']; 
/*
// PULL SCHOOL INFO

$sqlschool ="select school_name, school_logo_url, school_year, 1_trimester_closing, 2_trimester_closing, 3_trimester_closing, 4_trimester_closing, scroll_msg_parent from school where id_school = '$_SESSION[id_school]'";
print $sqlschool;
	
$resultcheck1 = $mysqli->query($sqlschool);			
			
//if(!$resultcheck) die ($sql.' failed. <p>Error: '.$mysqli->error);


while ($rowschool = $resultcheck1->fetch_assoc()) {

	$_SESSION['school_logo'] = $rowschool["school_logo_url"];
	$_SESSION['school_year'] = $rowschool["school_year"];
	
	$_SESSION['trimester1'] = $rowschool["1_trimester_closing"];
	
	$_SESSION['trimester2'] = $rowschool["2_trimester_closing"];
	
	$_SESSION['trimester3'] = $rowschool["3_trimester_closing"];
	
	$_SESSION['trimester4'] = $rowschool["4_trimester_closing"];
	
	$_SESSION['scroll_message_parent'] = $rowschool["scroll_msg_parent"];
	$_SESSION['school_name'] = $rowschool["school_name"];	
		
	$_SESSION['trimester'] = $trimester;	
	
}
	
		*/
	
	
	
	/*Insert into user audit table*/

print "schoologo " . $_SESSION["school_logo"] . " " . $_SESSION["school_name"];
// School Module Declaration

	

		
		
		
$_SESSION['module'] = 'PARTICIPANT';



include ('date.php');

//date("y/m/d h:i:s A");


$browser = $_SERVER["HTTP_USER_AGENT"];
$ipaddress = $_SERVER["REMOTE_ADDR"];

$_SESSION["hostip"] = $ipaddress;

$_SESSION["browser"] = $browser;

$sql ="insert into audit_parent (id_audit, id_user, username,log_date,ip_address,browser,activity) VALUES (0,'$_SESSION[id_user]', '$_POST[username]', '$alldate', '$ipaddress', '$browser', 'login_parent')";

	
	//$result = mysqli_query($link, $sql);

//if(!$result) die ($query.' failed. <p>Error: '.$mysqli->error);




print $_SESSION['name']; 
print $_SESSION['lastname']; 
print $_SESSION["validated"];



?>
          <script>
	//document.location.href ="notice.php";

          </script>
          <?php
		
	}
else { 
    //si no existe le mando otra vez a la portada 
    //header("Location: loginadmin.php?errorusuario=si"); 
	
	
	
	mysqli_close ($link);	

$_SESSION['source'] = 'NOLOGIN';
//include('system_parent_msg.php');

exit;
?>
          <script>
	alert ("Username and Password do not Match.")
	document.location.href ="login.php";
	      </script>
          <?php
}

  }

mysqli_close ($link);	
			
			

?>
			
	
          <script>
	//alert ("Username and Password do not Match.")
	document.location.href ="main.php";
	      </script>		
			
</body>
</html>
