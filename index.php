<?php include_once 'php.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap.min.css">
	<script type="text/javascript" src="plugins/jquery.js"></script>
	<script type="text/javascript" src="master.js"></script>
</head>
<body style="background-color: #DDDDDD;">

<div class="container">
	<div class="row" style="margin-top: 100px;">
		<div class="col-md-2"></div>
		<div class="col-md-8 form-group" style="height: 400px; 
		background-color: white; border-radius: 5px; padding: 30px 30px;">
		
			<input id="search" class="form-control" name="name/ID"
			placeholder="Search Firstname or Lastname or ID">
			
			<div class="panel panel-default" style="margin-top: 25px">
				<div class="panel-body">
					<table class="table table-striped">
					<thead>
					<tr>
						<th>Name</th>
						<th>ID number</th>
						<th>Passcode</th>
						<th>Course</th>
						<th>Year</th>
					</tr>
					</thead>
					<tbody id="tbody">
					<?php foreach(getstudents() as $g): ?>
					<tr>
						<td><?php echo $g->last_name.', '.$g->first_name; ?></td>
						<td><?php echo $g->ID_number; ?></td>
						<td><?php echo $g->passcode; ?></td>
						<td><?php echo $g->course; ?></td>
						<td><?php echo $g->year; ?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

</body>
</html>