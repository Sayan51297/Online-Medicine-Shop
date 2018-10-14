<!DOCTYPE html>
<html>
<head>
  <title>User Registration</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
  <link rel="stylesheet" href="../views/css/style.css">
  <style type="text/css">
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
  <a class="navbar-brand customBrandLogoDesign" href="../">FranklyRose</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <span class="navbar-text ml-auto">
      USER MODE
    </span>
  </div>
</nav>

<div class="container-fluid">
  <div class="row row-eq-height">
    <div class="col-lg-7 p-0">
      <div class="main-bannerclip-path">
      </div>
    </div>
    <div class="col-lg-5">
      <div class="registerForm-wrapper">
        <h2>Registration</h2>
        <form action="../home/registeration" method="post">
          <div class="form-group">
            <label>Email</label>
            <input type="email"     class="form-control"    name="cust_email"       placeholder="John@adms.com">          
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password"  class="form-control"    name="cust_password"    placeholder="Password">          
          </div>

          <div class="form-group">
            <label>Name</label>
            <input type="text"      class="form-control"    name="cust_name"        placeholder="John Doe">
          </div>

          <div class="form-group">
            <label>Phone</label>
            <input type="text"      class="form-control"    name="cust_phone"       placeholder="9674XXXXXX">
          </div>

          <div class="form-group">
            <label>Address</label>
            <input type="text"      class="form-control"    name="cust_add"           placeholder="1-A, Plot 42....">
          </div>

          <button type="submit" class="btn newButton">Submit</button>
          <button type="reset"  class="btn newButton">Reset</button>
          <br><br>
          <center><a href="../">Click here to Login</a></center>
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