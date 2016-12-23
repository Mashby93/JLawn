<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
	<Body>
		<?php
		//Connect to database
		
			$con = new mysqli("localhost", "id387438_adminm", "lilmike1", "id387438_jlawncare");
			if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    } 
		
		?>
			<div class="container">
				<h3>Tabs</h3>
				<ul class="nav nav-tabs">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				</ul>
			</div>
			
		<?php
		$sql_view_invoice="SELECT * FROM `Invoice`";
			
			//Assign the query then run		
			//$sql_view_invoice = "SELECT * FROM `Invoice`";	
			$result = $con->query($sql_view_invoice);
			
			if ($result->num_rows >0){
				?>
				<div class="container">
				<table class="table">
				<thead>
					<tr>
						<th>Invoice</th>
						<th>Customer</th>
						<th>Date</th>
					</tr>
				</thead>
				<tbody>
					<?php
				while($row = $result->fetch_assoc()){
					if ($row["PaidOut"]==1){
						echo '<tr class="success"><td>';
						
					}
					else{
						echo '<tr class="warning"><td>';
					
						}
					echo $row["InvoiceNumber"];
					echo"</td>";
					echo"<td>";
					echo $row["CustID"];
					echo"</td>";
					echo"<td>";
					echo $row["InvoiceDate"];
					
					echo"</td></tr>";
				}
				?>
				</tbody>
				</table>
				</div>
				<?php
			}
			
			else{echo "Nothing Found";}
             mysqli_close($con);
					?>
	</Body>
</html>