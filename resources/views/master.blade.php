
 @extends('components.header')


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

@extends('components.footer')


    