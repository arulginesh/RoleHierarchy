<?php
include("config.php");

$sql = "SELECT * FROM roles";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	// output data of each row
	echo '<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Main Role</th>
      <th scope="col">Sub Role</th>
    </tr>
  </thead>
  <tbody>';
	$i=1;
	while($row = mysqli_fetch_assoc($result)) {
		$mainrole = $row['id'];
		$sqls = "SELECT rh.main_role,r.name FROM role_hierarchy as rh left join roles as r on r.id=rh.main_role where sub_role=$mainrole";
		$results = mysqli_query($conn, $sqls);
		$sub = "";
		while($rows = mysqli_fetch_assoc($results)) {
			$sub.= $rows['name'].",";
		}
		if($sub!=""){
			echo '<tr>';
			echo '<td>'.$i.'</td>';
      echo '<td>'.$row['name'].'</td>';
			echo '<td>'.$sub.'</td>';
		}
		$i++;
 } 
 echo '</tbody>';
 echo '</table>';
 }?>
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
				
		</div>
		
  </body>
</html>