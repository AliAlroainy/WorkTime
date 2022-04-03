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
                <a class="nav-link active" href="pages/jobs.html">jobs</a>
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
