<!DOCTYPE html>
<html>
<head>
	<title>Add Medicine</title>
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
				<center><h2>Add Medicine</h2></center>
				<hr>
				<form action="../admin/enterInsertMedValue" method="post">
				  <div class="form-group">
				  	<a class="navbar-brand customBrandLogoDesign" style="color:white;">Insert</a>
				  </div>		
				  <div class="form-group">
				    <label>Medicine Name</label>
				    <input type="text" class="form-control" 	name="med_name" 	placeholder="Medicine Name">				    
				  </div>
				  <div class="form-group">
				    <label>Medicine Cost</label>
				    <input type="text" class="form-control" 	name="med_cost"  	placeholder="Medicine Cost">				    
				  </div>
				  <div class="form-group">
				    <label>Medicine Quantity</label>
				    <input type="text" class="form-control" 	name="med_quant"	placeholder="Medicine Quantity">				    
				  </div>
				  <button type="submit" class="btn newButton">Insert</button>
				  <button type="reset" 	class="btn btn-default">Reset</button>
				</form>
			</div>	
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>