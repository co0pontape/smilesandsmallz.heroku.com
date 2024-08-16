<?php 
$page = "guestlist"; 
$isAdmin = "true";
if($_SERVER['SERVER_NAME']!="localhost"){
	$hostname="co0pontape.db.9377262.hostedresource.com";
	$username="co0pontape";
	$password="Subarusti82";
	$dbname="co0pontape";
	$usertable="rsvp";

	mysql_connect($hostname,$username, $password);
	mysql_select_db($dbname);
	
	$results = mysql_query("select * from $usertable");
}	
?>
<?php include("include/header.php"); ?>

<style>
	#center {
		width: auto;
	}
	#content_full {
		margin: 0px;
		width: auto;
	}
	#content_box {
		width: 1028px;
		overflow: auto;
	}
	table tr.No {
		background-color: #000;
	}
	table th {
		cursor: pointer;
		cursor: hand;
		background-color: #fff;
		color: #000;
	}
</style>

	<div id="content" class="<?php echo $page; ?>">
	
		<div id="content_full" class="<?php echo $page; ?>">
		
			<div id="content_box" class="<?php echo $page; ?>">
			
				<div class="content_title">
					Guest List
				</div>			
		
				<table border="1" cellspacing="0" cellpadding="5" id="myTable" class="tablesorter">
					<thead>
					<tr>
						<th>Attending</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Address</th>
						<th>Email</th>
						<th>Phone Number</th>
						<th>Room Number</th>
						<th>Guest</th>
						<th>Guest Name</th>
						<th>Roommate</th>
						<th>Notifications</th>
						<th>Comments</th>
					</tr>
					</thead>					
					<tbody>
					<?php while ($row = mysql_fetch_array($results, MYSQL_ASSOC)) {
						echo "<tr class='".$row['Attending']."'>";
						echo "<td>".$row['Attending']."</td>";
						echo "<td>".$row['FName']."</td>";
						echo "<td>".$row['LName']."</td>";
						echo "<td>".$row['Address']."</td>";
						echo "<td>".$row['Email']."</td>";
						echo "<td>".$row['PhoneNumber']."</td>";
						echo "<td>".$row['RoomNumber']."</td>";
						echo "<td>".$row['Guest']."</td>";
						echo "<td>".$row['GuestName']."</td>";
						echo "<td>".$row['Roommate']."</td>";
						echo "<td>".$row['Notifications']."</td>";
						echo "<td>".$row['Comments']."</td>";
						echo "</tr>";
					} ?>
					</tbody>
				</table>
				
			</div>				
		
		</div>
		
	</div>

<?php include("include/footer.php"); ?>		