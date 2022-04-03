<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>workTime</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />

    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <!--link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script-->
    <!-- style> .darkmode-toggle {
    z-index: 5;
  }</style>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>

    function addDarkmodeWidget() {
        
const options = {
  bottom: '64px', // default: '32px'
  right: 'unset', // default: '32px'
  left: '32px', // default: 'unset'
  time: '0.5s', // default: '0.3s'
  mixColor: '#fff', // default: '#fff'
  backgroundColor: '#fff',  // default: '#fff'
  buttonColorDark: '#100f2c',  // default: '#100f2c'
  buttonColorLight: '#fff', // default: '#fff'
  saveInCookies: false, // default: true,
  label: '🌓', // default: ''
  autoMatchOsTheme: true // default: true

}
const darkmode = new Darkmode(options);
darkmode.showWidget();

  }
  window.addEventListener('load', addDarkmodeWidget);
</script-->

    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    />
    <!-- Google Fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    />
  </head>

  <body class="bg-dark">
    <!--------------------------  start header ---------------------------->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand fw-bold" href="index.html" style="color: #ffeba7"
          >workTime</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="container">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/jobs">jobs</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="pages/hire.html">hire</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/about.html">about</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/services.html">services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pages/contact.html">contact</a>
              </li>
              <li class="nav-item">
                <i class="bi bi-translate nav-link"></i>
              </li>
            </ul>
            
          </div>

          <div class="container">
            <form class="d-flex" style="position: relative">
              <input
                style="color: #ffeba7"
                class="form-control bg-dark rounded-pill w-100"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button
                style="
                  position: absolute;
                  right: 10px;
                  width: 30px;
                  height: 35px;
                  top: 1.4px;
                  background-color: transparent;
                  border: none;
                "
                class="rounded-pill"
                type="submit"
              >
                <i style="color: #ffeba7" class="fa fa-search"></i>
              </button>
            </form>
          </div>
         

          <div class="nav-item m-3">
            <a
              class="nav-link btn"
              href="pages/singin.html"
              style="text-decoration: none"
              >Login</a
            >
          </div>
         
        </div>
      </div>
    </nav>

    <!--------------------------  end header ---------------------------->

    <div
      class=" p-5 mt-lg-5 m-lg-5 d-flex flex-column align-items-center justify-content-center" style="margin-top: 20px;"
    >
      <!--first-hero-->
      <div
        class="container  p-3"
      >
        <!-- search form-->
        <div class="col-lg-8 col-sm-12 container mt-5">
          <form class="col-12">
            <fieldset class="input-group">
              <legend style="color: #ffeba7" class="p-2">
                #FindYourDreamPostion:
              </legend>

              <div class="col-12 m-2">
                <input
                  type="text"
                  class="form-control border-right"
                  placeholder="Skills, Designation, Companies"
                />
              </div>

              <div class="input-group m-2 col-12">
                <select class="form-select border-right">
                  <option>Experience</option>
                  <option>0 Year</option>
                  <option>1 Year</option>
                  <option>2 Year</option>
                  <option>3 Year</option>
                  <option>+3 Year</option>
                </select>

                <select class="form-select">
                  <option>Select Category</option>
                  <option>Accounf &amp; Finance</option>
                  <option>Information &amp; Technology</option>
                  <option>Marketing</option>
                  <option>Food &amp; Restaurent</option>
                </select>

                <input type="submit" class="btn seub-btn" value="Find" />
              </div>
            </fieldset>
          </form>
        </div>
        <!-- end search form-->

        <!--ffffffff-->
      </div>
      <!--end first-hero-->

      <!--second-hero-->
      <div
        class="container col-lg-5 d-flex flex-column justify-content-center align-items-center"
      >
        <!--------------------------  start slider ---------------------------->

        <div
          id="carouselExampleInterval"
          class="carousel slide container container-sm position-relative"
          data-bs-ride="carousel"
          style="margin-top: 70px"
        >
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
              <img
                src="assetes/svg/undraw_programming_re_kg9v.svg"
                class="container-fluid d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                src="assetes/svg/undraw_online_resume_re_ru7s.svg"
                class="container-fluid d-block w-100"
                alt="..."
              />
            </div>
            <div class="carousel-item" data-bs-interval="6000">
              <img
                src="assetes/svg/undraw_in_the_office_re_jtgc.svg"
                class="container-fluid d-block w-75"
                alt="..."
              />
            </div>
          </div>
        </div>

        <!-- end slider -->
      </div>
      <!--end second-hero-->
    </div>

    <!--end hero-->

    <!--cccccccccccccccccccccccccccccccc-->
    <div
      class="d-flex flex-column justify-content-center align-items-center"
      style="margin-top: 3rem"
    >
      <div class="p-3"><h3 style="color: #ffeba7">#LastNewJobs</h3></div>
      <p class="text-center p-3 pt-1" style="color: #fff">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur,
        cumque
      </p>

      <div class="container d-flex flex-grow-1 flex-lg-wrap">
        <div
          class="row container-sm"
          style="
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
          "
        >
          <div
            class="card mb-3 bg-dark text-white col-lg-3 m-lg-5"
            style="max-width: 100%; border: solid 1px #fde491"
          >
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">
                    UX Desiner</h5>
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
                  <a style="text-decoration: none" href="pages/jobDetails.html">
                    <button class="btn btn-primary">details</button>
                  </a>
                  <p class="card-text">
                    <small class="text-info">
                      <i class="bi bi-alarm"></i>
                       3 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="card mb-3 bg-dark text-white col-lg-3 m-lg-5"
            style="max-width: 100%; border: solid 1px #fde491"
          >
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">
                    Junior Java Developer</h5>
                  <p>
                    <i class="bi bi-building"></i>
                    Microsoft - (Part-Time)</p>
    
                  <p>
                    <i class="bi bi-geo-alt"></i>
                    Canada
                  </p>
                  <p>
                    <i class="bi bi-cash-stack"></i>
                    500 - 700 $/hour
                  </p>
                  <a style="text-decoration: none" href="pages/jobDetails.html">
                    <button class="btn btn-primary">details</button>
                  </a>
                  <p class="card-text">
                    <small class="text-info">
                      <i class="bi bi-alarm"></i>
                       10 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="card mb-3 bg-dark text-white col-lg-3 m-lg-5"
            style="max-width: 100%; border: solid 1px #fde491"
          >
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">
                    Accountant</h5>
                  <p>
                    <i class="bi bi-building"></i>
                    Cack Bank - (Full-Time)</p>
    
                  <p>
                    <i class="bi bi-geo-alt"></i>
                    Yemen
                  </p>
                  <p>
                    <i class="bi bi-cash-stack"></i>
                    250 - 500 $/hour
                  </p>
                  <a style="text-decoration: none" href="pages/jobDetails.html">
                    <button class="btn btn-primary">details</button>
                  </a>
                  <p class="card-text">
                    <small class="text-info">
                      <i class="bi bi-alarm"></i>
                       30 mins ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="card mb-3 bg-dark text-white col-lg-3 m-lg-5"
            style="max-width: 100%; border: solid 1px #fde491"
          >
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">
                    UX Desiner</h5>
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
                  <a style="text-decoration: none" href="pages/jobDetails.html">
                    <button class="btn btn-primary">details</button>
                  </a>
                  <p class="card-text">
                    <small class="text-info">
                      <i class="bi bi-alarm"></i>
                       3 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <div
            class="card mb-3 bg-dark text-white col-lg-3 m-lg-5"
            style="max-width: 100%; border: solid 1px #fde491"
          >
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">
                    UX Desiner</h5>
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
                  <a style="text-decoration: none" href="pages/jobDetails.html">
                    <button class="btn btn-primary">details</button>
                  </a>
                  <p class="card-text">
                    <small class="text-info">
                      <i class="bi bi-alarm"></i>
                       5 hours ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>



          <div
            class="card mb-3 bg-dark text-white col-lg-3 m-lg-5"
            style="max-width: 100%; border: solid 1px #fde491"
          >
            <div class="row g-0">
              <div class="col-md-12">
                <div class="card-body">
                  <h5 class="card-title">
                    UX Desiner</h5>
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
                  <a style="text-decoration: none" href="pages/jobDetails.html">
                    <button class="btn btn-primary">details</button>
                  </a>
                  <p class="card-text">
                    <small class="text-info">
                      <i class="bi bi-alarm"></i>
                       1 day ago</small>
                  </p>
                </div>
              </div>
            </div>
          </div>
        


        </div>
      </div>
    </div>

    <!--up btn-->

    <div
      id="toTopBtn"
      class="btn rounded-pill"
      style="
        position: fixed;
        bottom: 100px;
        right: 50px;
        width: 20px;
        height: 40px;
      "
    >
    <i class="bi bi-chevron-double-up"></i>
    </div>
    <script>
      $(document).ready(function () {
        $(window).scroll(function () {
          if ($(this).scrollTop() > 50) {
            $("#toTopBtn").fadeIn();
          } else {
            $("#toTopBtn").fadeOut();
          }
        });

        $("#toTopBtn").click(function () {
          $("html, body").animate(
            {
              scrollTop: 0,
            },
            1000
          );
          return false;
        });
      });
    </script>
    <!---%%%%%%%%%%%%%%%%%%%%%%-->

    <div
      class="container"
      style="
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: center;
        margin-top: 70px;
        margin-bottom: 20px;
      "
    >
      <h2 style="color: #ffeba7">#OurPartenters</h2>
    </div>

    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div
      class="container d-flex align-items-center justify-content-start"
      style="color: aliceblue"
    >
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div
          class="col-lg-4"
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
          "
        >
          <img
            class="rounded-circle"
            src="assetes/svg/google.svg"
            alt="Generic placeholder image"
            width="140"
            height="140"
          />
          <h2>Google</h2>
          <p class="text-center">
            Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod.
            Nullam id dolor id nibh ultricies vehicula ut id elit.
          </p>
          <p>
            <a
              class="btn btn-secondary"
              href="pages/partners.html"
              role="button"
              >View details &raquo;</a
            >
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div
          class="col-lg-4"
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
          "
        >
          <img
            src="assetes/svg/381606_microsoft_icon.svg"
            width="110"
            height="110"
          />
          <h2>Microsoft</h2>
          <p class="text-center">
            Duis mollis, est non commodo luctus, nisi erat porttitor ligula,
            eget lacinia odio sem nec elit. Cras mattis consectetur purus sit
            amet fermentum. Lorem ipsum dolor sit amet.
          </p>
          <p>
            <a
              class="btn btn-secondary"
              href="pages/partners.html"
              role="button"
              >View details &raquo;</a
            >
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div
          class="col-lg-4"
          style="
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 10px;
          "
        >
          <img
            src="assetes/svg/indeed-logo.svg"
            alt="Generic placeholder image"
            width="140"
            height="140"
          />
          <h2>Indeed</h2>
          <p class="text-center" class="text-center">
            Donec sed odio dui. Cras justo odio, dapibus ac facilisis in,
            egestas eget quam. Vestibulum id ligula porta felis euismod semper.
          </p>
          <p>
            <a
              class="btn btn-secondary"
              href="pages/partners.html"
              role="button"
              >View details &raquo;</a
            >
          </p>
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
    </div>

    <!-------------------------   ADs   ------------------->

    <div
      class="col-lg-12 d-flex align-items-center justify-content-center mt-5"
    >
      <div
        class="d-flex flex-column align-items-center justify-content-center w-50"
      >
        <div class="card bg-dark text-white" style="width: 100%; height: 90%">
          <img src="assetes/Socials.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <div style="color: #ffeba7"><h5>Ads</h5></div>

            <!--p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p-->
          </div>
        </div>
      </div>
    </div>

    <!------------ Footer --------------->
    <footer class="bg-dark text-center text-white mt-5">
      <!-- Section: Form -->
      <div class="d-flex align-items-center justify-content-center w-100">
        <form class="col-sm-9 col-lg-6 col-md-8">
          <div>Sign up for our newsletter</div>
          <input
            type="email"
            id="form5Example21"
            class="form-control"
            placeholder=" your Email address"
          />
          <button type="submit" class="btn btn-outline-light m-3">
            Subscribe
          </button>
        </form>
      </div>

      <!-- Section: Text -->
      <section class="mb-4">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
          distinctio earum
        </p>
      </section>
      <!-- Section: Text -->
      <!-- Grid container -->
      <div class="container p-4">
        <!-- Section: Social media -->
        <section class="mb-4">
          <!-- Facebook -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-facebook-f"></i
          ></a>

          <!-- Twitter -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-twitter"></i
          ></a>

          <!-- Google -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-google"></i
          ></a>

          <!-- Instagram -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-instagram"></i
          ></a>

          <!-- Linkedin -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-linkedin-in"></i
          ></a>

          <!-- Github -->
          <a
            class="btn btn-outline-light btn-floating m-1"
            href="#!"
            role="button"
            ><i class="fab fa-github"></i
          ></a>
        </section>

        <!-- Section: Social media -->
        <!-- Section: Links -->

        <!-- Section: Links -->
      </div>
      <!-- Grid container -->

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2022 Copyright:
        <a class="text-white" href="https://github.com/AliAlroainy"
          >Ali Alroainy</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!--script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script-->
    <script src="bootstrap-5.1.3-dist/js/bootstrap.bundle.js"></script>
    <body />
    <html />
  </body>
</html>
