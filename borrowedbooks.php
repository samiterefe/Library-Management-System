<?php
require 'includes/snippet.php';
require 'includes/db-inc.php';
include "includes/header.php";

?>


<div class="container">
	<?php include "includes/nav.php"; ?>
	<!-- navbar ends -->
	<!-- info alert -->
	<div class="alert alert-warning col-lg-7 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-0 col-sm-offset-1 col-xs-offset-0" style="margin-top:70px">

		<span class="glyphicon glyphicon-book"></span>
		<strong>Borrow Books</strong>
	</div>

</div>

<div class="container">
	<div class="panel panel-default">


		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Book Name</th>
					<th>Member Name</th>
					<th>Matric Number</th>

				</tr>
			</thead>
			<?php

			$sql = "SELECT * FROM borrow";

			$query = mysqli_query($conn, $sql);
			$counter = 1;
			while ($row = mysqli_fetch_array($query)) {

			?>
				<tbody>
					<tr>
						<td><?php echo $counter++; ?></td>
						<td><?php echo $row['bookName']; ?></td>
						<td><?php echo $row['memberName']; ?></td>
						<td><?php echo $row['matricNo']; ?></td>
					</tr>
				</tbody>
			<?php }

			?>
		</table>
	</div>
</div>

<div class="mod modal fade" id="popUpWindow">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- header begins here -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"> Warning</h3>
			</div>

			<!-- body begins here -->
			<div class="modal-body">
				<p>Are you sure you want to delete this book?</p>
			</div>

			<!-- button -->
			<div class="modal-footer ">
				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-warning pull-right" style="margin-left: 10px" class="close" data-dismiss="modal">
					No
				</button>&nbsp;
				<button class="col-lg-4 col-sm-4 col-xs-6 col-md-4 btn btn-success pull-right" class="close" data-dismiss="modal" data-toggle="modal" data-target="#info">
					Yes
				</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="info">
	<div class="modal-dialog">
		<div class="modal-content">

			<!-- header begins here -->
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"> Warning</h3>
			</div>

			<!-- body begins here -->
			<div class="modal-body">
				<p>Book deleted <span class="glyphicon glyphicon-ok"></span></p>
			</div>

		</div>
	</div>
</div>





<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
</script>
</body>

</html>