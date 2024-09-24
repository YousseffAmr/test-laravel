<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="project.js"></script>
    <script src="home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- Bootstrap CSS from CDN -->
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- jQuery from CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <title>Login</title>
  <style>
      /* Custom styles */
      .jumbotron {
        background-color: #1a2b3d;
        color: #ffffff;
        padding: 100px 25px;
        margin-bottom: 0;
      }
      .feature {
        text-align: center;
        padding: 50px 20px;
      }
      #s {
        display: none;
      }
         /* Dropdown Button */
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

/* The search field */
#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

/* The search field when it gets focus/clicked on */
#myInput:focus {outline: 3px solid #ddd;}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  border: 1px solid #ddd;
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
 </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Home</a></li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('about-us')}}">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact-us')}}">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/players/create')}}">Add player</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="x" data-toggle="dropdown" >
             Old Trafford
            </a>
            <ul class="dropdown-menu" aria-labelledby="x">
              <li><a class="dropdown-item" href="#">Tickets</a></li>
              <li><a class="dropdown-item" href="#">Seats</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Else</a></li>
            </ul>
          </li>      </ul>

      <nav class="navbar navbar-expand-sm navbar-secondary">
        
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Search</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="{{url('home')}}">Home</a>
    <a href="{{url('log-in')}}">Login</a>
    <a href="{{url('register')}}">Register</a>
    <a href="{{url('about-us')}}">About Us</a>
    <a href="{{url('contact-us')}}">Contact Us</a>
    <a href="{{url('/players/create')}}">Add Player</a>
  </div>
  </div>         
        
      </nav>
    </nav>
    <?php
$nameErr = $passErr  = "";
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "username is empty";
    } else {
      $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["pass"])) {
        $passErr = "pass is empty";
      } else {
        $pass = test_input($_POST["pass"]);
      }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>
    <section style="background-color: #224d79">
      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Welcome to Manchester United Fan Page</h1>
        </div>
        <section id="contact" class="jumbotron text-center">
          <div class="container">
            <h2>Fill out the form to login.</h2>
            <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> method="post">
              <div class="form-group">
                <input
                name="username"
                  type="text"
                  class="form-control"
                  placeholder="Username"
                  name="name"
                />
              </div>
              <span class="error">* <?php echo $nameErr;?></span>

              <div class="form-group">
                <input
                name="password"
                  type="password"
                  class="form-control"
                  placeholder="Your Password"
                  name="pass"
                  
                />
              </div>
              <span class="error">* <?php echo $passErr;?></span>

              <button type="submit" class="btn btn-primary btn-lg">
                Submit
              </button>
            </form>
          </div>
        </section>
      </section>
    </section>
    <script>
    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
  </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="project.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
  </body>
</html>
