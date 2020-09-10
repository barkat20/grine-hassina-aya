<?php

	include('config/db_connect.php');

	// write query for all pizzas
	$sql = 'SELECT name,author,id,photo FROM dvd ';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
	
	<?php include('templates/header1.php'); ?>

	<h4 class="center grey-text">DVD</h4>

	<div class="container">
		<div class="row">

			<?php foreach($pizzas as $pizza): ?>

				<div class="col s6 m4">
					<div class="card z-depth-0">
						<!---<img src="img/a.svg"class="pizza">-->

						<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($pizza['photo'] ).'"  class="pizza">' ; ?>


						<div class="card-content center">
							<h6><?php echo htmlspecialchars($pizza['name']); ?></h6>
							<ul class="grey-text">
								<?php foreach(explode(',', $pizza['author']) as $ing): ?>
									<li><?php echo htmlspecialchars($ing); ?></li>
								<?php endforeach; ?>
								 
							</ul>
						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="details.php?id=<?php echo $pizza['id'] ?>">more info</a>
						</div>
					</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>

	<?php include('templates/footer.php'); ?>

</html>

