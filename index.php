<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Pagrindinis</h2>
		<?php
			if (isset($_SESSION['userID'])) {
				$name =  $_SESSION['userName'];
				$surname = $_SESSION['userSurname'];
				$role = $_SESSION['userRole'];
				echo '<p>Prisijungta kaip '.$name.' '.$surname.'. Rolė: '.$role.'</p>';
			}
			// checking if the prace where you enter your usser name and password is empty
			if(isset($_GET['empty'])==true){
				echo'<font color="#FF0000"><p align="center">Norint prisijungti irasykite savo el pasta ir slaptazodi</p>';
			}
	
	
	
			// checking if there is an error with the username or password
			if(isset($_GET['error'])==true){
				echo'<font color="#FF0000"><p align="center">blogas emailas arba slaptazodis</p>';
			}
		?>
	</div>
</section>
<?php
	include_once 'footer.php';
?>
