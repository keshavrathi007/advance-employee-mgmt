<?php
include '../dbcon.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>

<div class="container">
	<div class="col-lg-12"><br>
		<div class="row"> 
		<h3 class="col-lg-8">Displaying Attendence</h3>
		<a href="../login/index.php" class="col-lg-3"><button class="btn btn-success col-lg-4" name="logout">logout</button></a>
        </div>
		<table class="table table-stripped table-hover table-bordered">
			<tr class="text-dark">
				<th><h5>ID</h5></th>
				<th><h5>Name</h5></th>
				<th><h5>Day</h5></th>
				<th><h5>Date</h5></th>
				<th><h5>Time_In</h5></th>
                <th><h5>Time_Out</h5></th>
			</tr>

			
			<?php
include '../dbcon.php';
	
$q="SELECT * FROM `time`";

$query = mysqli_query($con,$q);

while ($res = mysqli_fetch_assoc($query)) {
?>

			<tr>
				<th><?php echo $res['id'] ?></th>
				<th><?php echo $res['name'] ?></th>
				<th><?php echo $res['day'] ?></th>
				<th><?php echo $res['date'] ?></th>
				<th><?php echo $res['time_in'] ?></th>
				<th><?php echo $res['time_out'] ?></th>
			</tr>
<?php }
?>

		</table>
	</div>
</div>
</body>
</html>