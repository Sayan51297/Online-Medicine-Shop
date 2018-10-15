<!DOCTYPE html>
<html>
<head>
	<title>Frankly Rose</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link rel="stylesheet" href="../views/css/style.css">
	<style type="text/css">
		table,td,th
		{
			border: 1px solid black;
		}
		td,th
		{
			width: 	10%;
			text-align: center;
		}
		a
		{
			text-decoration: none;
		}
		button
		{
			text-decoration: none;
		}
		.newButton
		{
			background-color: orange;
			padding: 7px 15px;
			position: relative;
			color: white;
		}
		b
		{
			margin-right: 15px;
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
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="../home/custIndex">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../home/customerDetails">Account</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Transaction History</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../home/logout">LOGOUT</a>
      </li>
      <li>
      	<a class="nav-link" href="#">USER MODE</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-fluid">
	<div class="row row-eq-height">
		<div class="col-lg-10" style="margin: 1em auto">
		<hr>
			<center><h2>Transaction Details</h2></center>
		<hr>
		<table>
			<tr>
				<th>Transaction ID</th>
				<th>Total Cost</th>
				<th>Transaction Date</th>
			</tr>
			<tr>
				<td>A7896</td>
				<td>200.00</td>
				<td>17/08/2018</td>
			</tr>
			<tr>
				<td>A7896</td>
				<td>200.00</td>
				<td>17/08/2018</td>
			</tr>
			<tr>
				<td>A7896</td>
				<td>200.00</td>
				<td>17/08/2018</td>
			</tr>
			<tr>
				<td>A7896</td>
				<td>200.00</td>
				<td>17/08/2018</td>
			</tr>
		</table>		
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
