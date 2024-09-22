<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div>
		<table border="1">
			<thead>
				<th>name</th>
				<th>price</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('config.php');
          session_start();
            $user_id =$_SESSION['user_id'];
					$query=mysqli_query(mysql: $conn,query: "select * from `add-ship` WHERE user = '$user_id'");
					while($row=mysqli_fetch_array(result: $query)){
						?>
						<tr>
							<td><?php echo $row['name']; ?></td>
							<td><?php echo $row['price']; ?></td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>