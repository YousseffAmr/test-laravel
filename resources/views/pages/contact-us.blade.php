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

    <title>Contact us</title>
    <style>
      /* Custom styles */
      .jumbotron {
        background-color: #00274b;
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
      .map-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background: #f0f0f0;
        }
        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
         
        }
        .video-container {
                            position: relative;
                            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
                            height: 0;
                            overflow: hidden;
                            max-width: 100%;
                            background: #000;
                        }
                        .video-container iframe {
                            position: absolute;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            border: 0;
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
          <a class="nav-link" href="{{url('log-in')}}">Login</a>
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
          </li>
      </ul>

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

<section style="background-color: #224d79">
    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="display-4">Welcome to Manchester United Fan Page</h1>
        </div>
        <section id="contact" class="jumbotron text-center">
      
            <div class="container">
                <h1>It's Our Location</h1><br>
                <div class="map-container">
                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3452.233442184887!2d31.348!3d30.0875!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145815f8ae13d51f%3A0xac27a6ea7729ad75!2s37%20Galal%20Al%20Din%20Al%20Desouky%2C%20Almazah%2C%20Heliopolis%2C%20Cairo%20Governorate%204461150!5e0!3m2!1sen!2seg!4v1722790404116!5m2!1sen!2seg"
                        width="600"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe> 
                </div>
              <br>
              <br>
              <br>
              <br>
              <br>
                
             
                    <h1>Watch our last match Highlights</h1>
                    <div class="video-container">
                        <iframe class="a"
                        src="https://www.youtube.com/embed/IWlrgDod7LQ?si=rhIzLUFLpZJ9Rvw-"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                            
                        </iframe>
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
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="project.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/jquery-3.7.1.min.js"></script>
  </body>
</html>
