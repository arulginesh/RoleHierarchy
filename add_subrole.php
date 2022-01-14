<?php
include("config.php");


$sql = "SELECT * FROM roles";
$result = mysqli_query($conn, $sql);

$sqls = "SELECT id,name as rolename FROM roles";
$results = mysqli_query($conn, $sqls);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
			<!-- As a link -->
		
		<div class="container">
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-group">
				<label for="exampleInputEmail1">Choose Subrole name :</label>
					<select name="sub" class="custom-select" >
								<?php
								if (mysqli_num_rows($result) > 0) {
									// output data of each row
									while($row = mysqli_fetch_assoc($result)) {
									
								
								?>
								<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
								<?php } }?>
					</select>
				</div>
				<div class="form-group">
				<label for="exampleInputEmail1">Choose Reporting to Role name :</label>
					<select name="main" class="custom-select" >
								<?php
									// output data of each row
									while($rows = mysqli_fetch_assoc($results)) {
									
								
								?>
								<option value="<?php echo $rows["id"];?>"><?php echo $rows["rolename"];?></option>
								<?php }?>
					</select>
				</div>
					<button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
		</div>
		
  </body>
</html>