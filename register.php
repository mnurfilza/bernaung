<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css\style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


    <title>Bernaung</title>
  </head>
  <body>
    <nav class="navbar navbar-default navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="img/logo.png"></a>
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Kontrakan</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Rumah</a>
            </li>
          </ul>
          <form class="form-inline my-8 my-lg-2">
            <input class="form-control mx-md-8 wrap-search " type="search" placeholder="Search" aria-label="Search">
            <button class="border-btn btn btn-outline-success mx-sm-4 " type="submit"><i class="material-icons">search</i></button>
          </form>
        <ul class="navbar-nav my-2 my-lg-0">
          <li class="nav-item active">
              <a class="btn btn-outline-primary" href="#">Daftar</a>
            </li>
            <li class="nav-item active">
              <a class="margin-btn btn btn-outline-secondary" href="login.php">Login</a>
            </li>
        </ul>
        </div>
      </div>
    </nav>
    <form class="reg" action="action_regis.php" method="post">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class="dark-grey">Registration</h3>
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-12">
          <label>Username</label>
          <input type="text" name="username" class="form-control" id="" value="" placeholder="Masukan Username">
        </div>
      </div>
      <div class="row">
            <div class="form-group col-lg-6">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" id="" value="">
      </div>
      <div class="form-group col-lg-6">
        <label>Repeat Password</label>
        <input type="password" name="r_pass" class="form-control" id="" value="">
      </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <label>Email Address</label>
          <input type="Email" name="email" class="form-control" id="" value="">
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 mt-2">
          <input type="submit" name="submit" class="btn btn-outline-primary" id="" value="Daftar">
        </div>
      </div>

    </div>
</form>
</body>
</html>