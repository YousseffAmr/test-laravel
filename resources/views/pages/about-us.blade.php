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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>about us</title>
    <style>
      
   
     
      
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc;
}

.accordion:after {
  content: '\002B';
  color: #777;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.panel {
  padding: 0 18px;
  background-color: white;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
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
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link" href="{{url('home')}}">Home</a></li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('register')}}">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('log-in')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('contact-us')}}">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('/players/create')}}">Add player</a>
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
          </li>
      </ul>

      <nav class="navbar navbar-expand-sm navbar-secondary">
        
        <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn">Search</button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    
  </div>
  </div>         
      </nav>
    </nav>

<div class="container ">
   <div class="text-light">
        <h2>Questions & Answers</h2>
    <p>In this page we honestly answer of all your main and repeated questions.</p>
  </div>
    <button class="accordion">Is this official website of the club?</button>
    <div class="panel">
      <p>No , We just fan website that you can take real informations about everything of our club and also here special tickets of Old Trafford.</p>
    </div>
    
    <button class="accordion">How can we get special tickets?</button>
    <div class="panel">
      <p>Very Soon in next season , we will inform you in E-mail.</p>
    </div>
    
    <button class="accordion">Where can I find official Manchester United merchandise?</button>
    <div class="panel">
      <p>In the official website club. <a href="https://www.manutd.com/">Click here</a></p>
    </div>
    <button class="accordion">Who is Manchester United's all-time top goal scorer?</button>
    <div class="panel">
        <p>As of now, Wayne Rooney holds the record for being Manchester United's all-time top goal scorer.</p>

    </div>
</div>
   
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
              panel.style.maxHeight = null;
            } else {
              panel.style.maxHeight = panel.scrollHeight + "px";
            } 
          });
        }
        </script>
<!-- search -->
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
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="project.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
  </body>
</html>