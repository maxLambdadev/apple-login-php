<?php 
session_start();


//Inicio la sesión 

//CHECK IF USER IS AUTHENTICATED
 if ($_SESSION['validated'] == "YES") { 
   
	
		 if ($_SESSION['role'] != 'ADMIN' and $_SESSION['role'] != 'PARTICIPANT')
		 
		 {
	
	
    ?>
		<script>
	alert ("System Alert: This is a Restricted Area - Please Login with Credentials")
	document.location.href ="login.php";
	</script>

	<?PHP
	//ademas salgo de este script 
    exit(); 
} 

 }

else

{
	?>
    
	<script>
	alert ("System Alert: This is a Restricted Area - Please Login with Credentials")
	document.location.href ="login.php";
	</script>
	
	<?php 
	
	
}



 if ($_SESSION['needupdate'] == 'PENDING')
 
 {
	 ?>
	 <script>

document.location.href ="logoutparent.php";
</script>
<?php
	 
	 
	 
 }
 



?>
