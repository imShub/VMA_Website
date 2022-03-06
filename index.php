<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Vision Merit Academy | Connect With Success... </title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap stylesheet -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font awsome css -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!-- Favicon Icon Link -->
  <link rel="shortcut icon" href="img/VMA_favicon.png" type="image/x-icon">
  <!-- Google Font Link -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <script src="script.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <style>
    @media only screen and (max-width: 600px){
      #popup{
        display: none;
        position: absolute;
        margin: 0 auto;
        top: 29%;
        left: 42%;
        transform: translate(-50%, -50%);
        z-index: 9999;
      }
      #popup img{
        height: 550px;
        width: 360px;
      }
      #close{
        right: -50px;
      }
    }
    @media only screen and (max-width: 380px){
      #popup{
        display: none;
        position: absolute;
        margin: 0 auto;
        top: 29%;
        left: 42%;
        transform: translate(-50%, -50%);
        z-index: 9999;
      }
      #popup img{
        height: 550px;
        width: 360px;
      }
      #close{
        right: -50px;
      }
    }
    </style>
</head>

<body>
  <!-- Navbar -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(194, 194, 194);">
      <a class="banner d-inline-block" href="#">
        <img src="img/VMA Banner.jpg" alt="logo" style="width: 235px; height: 55px; margin-left: 15px; margin: 10px;" class="img-fluid">
      </a>  
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">ABOUT US</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                COURCES
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">FYJC (SCIENCE)</a></li>
                <li><a class="dropdown-item" href="#">SYJC (SCIENCE)</a></li>
                <li><a class="dropdown-item" href="#">JEE</a></li>
                <li><a class="dropdown-item" href="#">NEET</a></li>
                <li><a class="dropdown-item" href="#">MHTCET</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">STUDY MATERIAL</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="our-results.php">RESULTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">BROUCHURE</a>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact-us.php">CONTACT</a>
            </li>
          </ul>
        </div>
    </nav>
  </header>

  <!-- *********** Main **************** -->
  <main>
    <!-- Popup MEssage -->
    <div class="container-fluid">
      <div id="popup" style="display: block;">
        <center>
          <img src="img/new_popup1.png" alt="popup" class="img-responsive"> 
        </center>
         <button id="close">X</button>  
      </div>
      <script>
        $(document).ready(function () {
        //select the POPUP FRAME and show it
          $("#popup").hide().fadeIn(1000);
      
          //close the POPUP if the button with id="close" is clicked
          $("#close").on("click", function (e) {
          e.preventDefault();
          $("#popup").fadeOut(1000);
        });
    });
      </script>
    </div>
    <!-- Crousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
          <img src="img/VMA_banner_official.jpg" class="d-block w-100 img-fluid" alt="VMA Banner" style="width: 1110px; height: 600px;">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img/banner_result_1.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 1110px; height: 600px;">
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="img/banner_result_2.jpg" class="d-block w-100 img-fluid" alt="..." style="width: 1110px; height: 700px;">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <br><br>

    <!-- Welcome Section -->
    <div class="container-fluid">
      <div class="row welcome-row">
        <div class="col-md-4 mt-5 mt-md-0 welcome-s-img"><img src="img/welcome-1.png" width="400" height="400"
            alt="about-us" class="img-fluid"></div>
        <div class="col-md-8 mt-5 mt-md-0 welcome-s">
          <h1>WELCOME TO VISION MERIT ACADEMY</h1>
          <p>
            A warm welcome to the Vision Merit Academy! We are commited to take education to every single door, making
            it
            a
            superb blend of knowledge and job specific. Our mission is to create ethical and intellectual personnel
            through
            qualitative education.
          </p>
          <p>
            Today,Vision Merit Academy
            is located at Andheri West, Mumbai, Maharashtra. And, we
            are looking forward to spread our efficiency at every nook and corner of India. Choose to contact or reach
            us
            for an assured advanced career.
          </p>
          <a href="about.php" class="read-more text-center">READ MORE</a>
        </div>
      </div>
    </div>
    </div>
    <br><br><br>

    <!-- COURCES -->
    <div class="cources container">
      <h1>Our Cources</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <img src="img/card-img-1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">FYJC and SYJC (Science)</h5>
              <p class="card-text">Students of Classes XI and XII Standard get coaching of basic subject like Physics,
                Chemistry, Mathematics, Biology,etc. </p>
              <button type="button" class="btn btn-warning" >Apply Now</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/card-img-2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Engineering Cources</h5>
              <p class="card-text">Students of classes XI and XII are prepared for entrances. Also, engineering students
                are given regular coaching.</p>
              <button type="button" class="btn btn-warning">Apply Now</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/card-img-3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Medical Courses</h5>
              <p class="card-text">Students of classes XI and XII are preapared for entrances. Also, medical students
                are
                given regular coaching.</p>
              <button type="button" class="btn btn-warning">Apply Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- Tap to Go to Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-double-up"></i></button>

  </main>
  <!-- ***************Footer Section*********************-->
<footer class="bg-dark text-white pt-3 pb-2">

    <div class="container text-center text-md-left">

      <div class="row text-center text-md-left">

        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold"> Vision Merit Academy</h5>
          <p>A warm welcome to the Vision Merit Academy ! We are commited to take education to every singel door, making
            it a superb blend of knowledge and job specific. Our mission is to create ethical and intellectual personnel
            through qualitative education.</p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold ">OUR COURSES</h5>
          <p>
            <a href="#" style="text-decoration: none;">FYJC (Science)</a>
          </p>
          <p>
            <a href="#" style="text-decoration: none;">SYJC (Science)</a>
          </p>
          <p>
            <a href="#" style="text-decoration: none;">JEE</a>
          </p>
          <p>
            <a href="#" style="text-decoration: none;">MHTCET</a>
          </p>
          <p>
            <a href="#" style="text-decoration: none;">NEET</a>
          </p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 font-weight-bold">Contact</h5>
          <p>
            <i class="fa fa-home mr-3"></i> G-11, Ground Floor, Om Heera Panna Mall, near Shreeji Hotel, Oshiwara,
            Andheri West, Mumbai-400053
          </p>
          <p>
            <i class="fa fa-phone-alt mr-3"></i> (+91) 9987217443
          </p>
          <p>
            <i class="fa fa-phone-alt mr-3"></i> (+91) 8692951808
          </p>
          <p>
            <i class="fa fa-envelope mr-3"></i> info@visionmeritacademy.com
          </p>
        </div>

      </div>

      <hr class="mb-4">

      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
          <p>Copyright &copy;2021 All reserved by:
            <a href="#" style="text-decoration: none;">
              <strong class="text-warning">Vision Merit Academy</strong>
            </a>
          </p>
        </div>

        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right social-icon">

            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a href="https://fb.me/visionmeritacademy" target="_blank" class="btn-floating btn-sm" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/vision_merit_academy/" target="_blank" class="btn-floating btn-sm"
                  style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" class="btn-floating btn-sm" style="font-size: 23px;"><i class="fab fa-google-plus"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" class="btn-floating btn-sm" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.youtube.com/channel/UCiXdPjX0XRa-nh7J6iTufGA" target="_blank" class="btn-floating btn-sm" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
              </li>
            </ul>

          </div>

        </div>

      </div>
    </div>
</footer>

  <!-- Bootstrap Js -->
  <script src="js\jquery.js"></script>
  <script src="js\bootstrap.js"></script>

  <!-- JS for Button -->
  <script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () { scrollFunction() };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
  </script>
</body>

</html>