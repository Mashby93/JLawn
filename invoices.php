<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <head>
	<Body>
		<?php
			$con = new mysqli("localhost", "id387438_adminm", "lilmike1", "id387438_jlawncare");
			if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    } 
		
             mysqli_close($con);
					?>
	</Body>
</html>