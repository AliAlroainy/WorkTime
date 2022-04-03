<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobDetails</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/style.css"/>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">


</head>
<body class=" bg-dark">
 
   <!--------------------------  start header ---------------------------->

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container">
      <a class="navbar-brand  fw-bold" href="../index.html" style="color: #ffeba7;">workTime</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="jobs.html">jobs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="hire.html">hire</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html">about</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="services.html">services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">contact</a>
                </li>
             
              </ul>
          </div>
      
      <div class="container">
          <form class="d-flex" style="position: relative;">
        <input style="color: #ffeba7;" class="form-control bg-dark rounded-pill w-100 " type="search" placeholder="Search" aria-label="Search">
        <button style="position: absolute; right: 10px; width: 30px; height: 35px; top: 1.4px; background-color: transparent; border: none;" class=" rounded-pill" type="submit"><i style="color: #ffeba7;" class="fa fa-search"></i></button>
      </form>
    </div>
        
        <div class="nav-item m-3 "> 
            <a class="nav-link btn " href="singin.html" style="text-decoration: none;  ">Login</a>
        </div>
      </div>
    </div>
  </nav>

  <!--------------------------  end header ---------------------------->
<div class="container  " style="margin-top: 150px;">

            
    <div class="card mb-3 bg-dark text-white border-warning" style="max-width: 100%;">
        <div class="row g-0">
          <div class="col-md-6">
            <div class="card-body">
              <h3 class="card-title">UX Desiner</h3>
              <img src="../assetes/svg/google.svg" width="50" height="50" class="m-3" />
              <p>
                <i class="bi bi-building"></i>
                Google - (Rimotly)</p>

              <p>
                <i class="bi bi-geo-alt"></i>
                USA
              </p>
              <p>
                <i class="bi bi-cash-stack"></i>
                250 - 400 $/hour
              </p>
              <h5>Responsibilities often include:

              </h5>
              <ul>
                <li>Consulting with clients to understand their goals
                  .</li>
                <li>Explaining user research results to internal and external stakeholders.</li>
                <li>Developing personas and usage scenarios.</li>
                <li>Conducting usability testing.</li>
                <li>Creating wireframes, storyboards, sitemaps and screen flows.</li>
                <li>Creating product prototypes.</li>
                <li>Analyzing user feedback and activity, and iterating to enhance the user experience.</li>
                <li>Assisting with content development.</li>
                <li>Conducting competitor and customer analysis.</li>
              </ul>

             <a style="text-decoration: none;" href="#"> <button class="btn btn-primary" >
              <i class="bi bi-clipboard-check"></i>
               Apply</button> </a>
              <p class="card-text"><small class="text-info">Last updated 3 mins ago</small></p>
            </div>
          </div>

          <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="../assetes/svg/undraw_in_the_office_re_jtgc.svg" class="w-75 mt-3">
          </div>

        </div>
      </div>


</div>

    <!--up btn-->

    <div id="toTopBtn" class="btn rounded-pill" style="position: fixed; bottom: 100px; right: 50px; width: 20px; height:40px;  ">
      <i class="bi bi-chevron-double-up"></i>
    </div>
    <script>
      $(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('#toTopBtn').fadeIn();
    } else {
      $('#toTopBtn').fadeOut();
    }
  });

  $('#toTopBtn').click(function() {
    $("html, body").animate({
      scrollTop: 0
    }, 1000);
    return false;
  });
});
    </script>
    <!---%%%%%%%%%%%%%%%%%%%%%%-->


     
<!------------ Footer --------------->
<footer class="bg-dark text-center text-white mt-5">
   
  <!-- Section: Form -->
<div class="d-flex align-items-center justify-content-center w-100">
 
    <form class=" col-sm-9 col-lg-6 col-md-8  ">
      
      <div >Sign up for our newsletter   </div>
    <input type="email" id="form5Example21" class="form-control " placeholder=" your Email address" />
    <button type="submit" class="btn btn-outline-light m-3 ">
      Subscribe
    </button>
  </form>
 
</div>

  <!-- Section: Text -->
  <section class="mb-4">
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
    </p>
  </section>
  <!-- Section: Text -->
<!-- Grid container -->
<div class="container p-4">
<!-- Section: Social media -->
<section class="mb-4">
  <!-- Facebook -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-facebook-f"></i
  ></a>

  <!-- Twitter -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-twitter"></i
  ></a>

  <!-- Google -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-google"></i
  ></a>

  <!-- Instagram -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-instagram"></i
  ></a>

  <!-- Linkedin -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-linkedin-in"></i
  ></a>

  <!-- Github -->
  <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
    ><i class="fab fa-github"></i
  ></a>
</section>

<!-- Section: Social media -->
  <!-- Section: Links -->
 
  <!-- Section: Links -->
</div>
<!-- Grid container -->

<!-- Copyright -->
<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2022 Copyright:
  <a class="text-white" href="https://github.com/AliAlroainy">Ali Alroainy</a>
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->



        <!--script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script-->
    <script src="../bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
</body>
</html>