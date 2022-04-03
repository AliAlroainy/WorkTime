<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>services</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="../css/style.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<style>
   .title {
     color: #ffeba7;
     margin-bottom: 30px;
     position: relative
 }

 .title::before {
     position: absolute;
     left: -29px;
     top: 0;
     height: 20px;
     width: 20px;
     transform: rotate(45deg);
     background-color: #cabb88;
     box-shadow: 0px 4px 4px 0px #aaa;
     border-radius: 4px;
     content: ''
 }

 .title::after {
     position: absolute;
     left: -19px;
     top: 25px;
     height: 14px;
     width: 14px;
     transform: rotate(45deg);
     background-color: #cabb88;
     box-shadow: 0px 4px 4px 0px #aaa;
     border-radius: 4px;
     content: ''
 }

 .services {
     padding: 40px;
     position: relative
 }

 .services .square {
     height: 100px;
     width: 100px;
     margin: 30px auto 40px;
     position: relative;
     border-radius: 15px;
     transform: rotate(45deg);
     padding: 10px;
     background-color: transparent;
     box-shadow: 0px 0px 27px 0px #ccc;
     border: 2px dotted #eaf3fa
 }

 .square i {
     transform: rotate(315deg);
     display: block;
     color: #ffeba7;
     font-size: 40px;
     padding-top: 17px;
     padding-right: 14px
 }

 .services .square::before {
     position: absolute;
     left: -10px;
     top: 0;
     width: 1px;
     height: 100%;
     background-color: #ffeba7;
     content: ''
 }

 .services .square::after {
     position: absolute;
     left: 50px;
     top: 66px;
     width: 1px;
     height: 88%;
     background-color: #ffeba7;
     content: '';
     transform: rotate(90deg)
 }

 .services .serv .num {
     width: 60px;
     height: 60px;
     box-shadow: 0px 0px 15px 0px #00a9d3;
     margin: -38px auto 15px auto;
     border-radius: 50%;
     color: #fff;
     font-size: 30px;
     padding-top: 7px;
     border: 1px dashed
 }

 .services .serv h5 {
     color: #ffeba7
 }

 .services .serv p {
     color: #777
 }

 .services .serv hr {
     width: 30px;
     border-top: 3px solid #ffeba7
 }
</style>

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



    <div class="container" style="margin-top: 150px; margin-bottom: 100px;">


    <div class="services pd">
      <div class="container">
          <h3 class="title">Services</h3>
          <div class="row text-center">
              <div class="col-md-3">
                  <div class="square"><i class="fas fa-code"></i></div>
                  <div class="serv">
                      <h5>#Guiding</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="serv">
                      <div class="square"><i class="fas fa-cogs"></i></div>
                      <h5>#Hiring</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="square"><i class="fas fa-globe"></i></div>
                  <div class="serv">
                      <h5>#BestJobs</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="square"><i class="fas fa-user-shield"></i></div>
                  <div class="serv">
                      <h5>#SecureWebsite</h5>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                  </div>
              </div>
          </div>
      </div>
  </div>


</div>




  
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