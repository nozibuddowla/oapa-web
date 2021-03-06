<!DOCTYPE html>
<?php
  $chk_val = "true";
  if(isset($_GET["chk"])){
    $chk_val = $_GET["chk"];
  }
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/login.css" />
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />

    <link
      href="https://fonts.googleapis.com/css?family=Quicksand&display=swap"
      rel="stylesheet"
    />
    <title>Login</title>
  </head>

  <body>
    <?php
    if($chk_val=="false"){
    ?>
    <script>alert("Number/Pin Does not Match")</script>
    <?php


  }
  ?>
    <form action="login_check.php" method="post">
      <div class="">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#"
            ><img src="../icons/navlogo.png" alt=""
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse nav justify-content-end"
            id="navbarNav"
          >
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#"
                  >Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#service">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="nav-button" href="#login"
                  >Login/Register</a
                >
              </li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="row d-flex justify-content-around align-items-center">
        <div class="col-md-6">
          <img id="banner" src="../banners/login.png" alt="" />
        </div>
        <div class="col-md-6" id="login-section">
          <div id="card-bg" class="card text-center">
            <div class="card-header">
              <label for="">Login As :</label><br />
              <img src="../icons/admin.png" alt="" class="admin" />
              <img src="../icons/user.png" alt="" class="user" /><br />
              <label id="admin" for="">Admin</label>
              <label id="user" for="">User</label>
            </div>

            <div class="card-body">
              <label id="label" for="">Enter Your Phone Number</label> <br />
              <input
                id="input"
                type="text"
                name="phone"
                id=""
                required
                oninvalid="this.setCustomValidity('Enter Phone Number')"
                onchange="this.setCustomValidity('')"
                placeholder="+8801900000000"
              /><br />
              <label id="label" for="">Enter Your Pin Number</label> <br />
              <input
                id="input"
                type="password"
                name="pin"
                id=""
                required
                oninvalid="this.setCustomValidity('Enter Pin Number')"
                onchange="this.setCustomValidity('')"
                placeholder="* * * * * *"
              />
            </div>
            <div class="card-footer">
              <input id=btn type="submit" name="submit" value="Login">
              <h5>
                <span> Haven't Registered Yet? </span>
                <a id="link" href="../forms/registration.php">Register Now!</a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </form>
    <script src="../jquery/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/login.js"></script>
  </body>
</html>
