<!DOCTYPE html>
<html>
<head>
	<title>Admin Home</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<style type="text/css">
		html,body
		{
			font-family: 'Muli', sans-serif;
		}
		.customBrandLogoDesign
		{
			background-color: orange;
			padding: 5px 13px;
			position: relative;
			top: 0;
			left: 0;
		}
		table,td,th
		{
			border: 1px solid black;
		}
		td,th
		{
			width: 	10%;
			text-align: center;
		}
		.customBrandLogoDesign::after
		{
			content: '';
			position: absolute;
			top: 0px;
			right: -15px;
			width: 0px;
			height: ;
			border-top: 40px solid orange;
			border-right: 15px solid transparent;
		}
		a
		{
			text-decoration: none;
		}
		.newButton
		{
			
		}
	</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand customBrandLogoDesign" href="../admin">FranklyRose</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
  	<!--
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
    </ul>
	-->
    <span class="navbar-text ml-auto">
      	ADMIN MODE
    </span>
  </div>
</nav>

<div class="container-fluid">
	<div class="row row-eq-height">
		<div class="col-lg-7" style="margin: 1em auto;">
			<div class="registerForm-wrapper">
				<hr>
				<center><h2>Medicine List</h2></center>
				<hr>
				<a href="admin/enterInsertMed" class="navbar-brand customBrandLogoDesign" style="color:white;">ADD A MEDICINE</a>
				<br><br>
				<table>
					<tr>
						<th>Medicine ID</th>
						<th>Medicine Name</th>
						<th>Medicine Cost</th>
						<th>Medicine Quantity</th>
						<th>Update</th>
						<th>Delete</th>
					</tr>
					<?php foreach($data as $med):?>
						<tr>
							<td><?=$med['med_id']?></td>
							<td><?=$med['med_name']?></td>
							<td><?=$med['med_cost']?></td>
							<td><?=$med['med_quant']?></td>
							<td><a class="btn newButton" href="admin/updateMed/<?=$med['med_id']?>">Edit</a></td>
							<td><a class="btn newButton" href="admin/deleteMed/<?=$med['med_id']?>">Delete</a></td>
						</tr>
					<?php endforeach ?>
				</table>
			</div>	
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>