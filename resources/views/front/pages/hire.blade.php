@include('front.components.header')


<div class="container " style="margin-top: 150px;  margin-bottom:500px">

    <h2 style="color:#ffeba7 ;" class="text-center">#HiringPeople</h2>

    <section class="h-100 gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-lg-9 col-xl-7">
              <div class="card">
                <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                  <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp" alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2" style="width: 150px; z-index: 1">
                   
                  </div>
                  <div class="ms-3" style="margin-top: 130px;">
                    <h5>Andy Horwitz</h5>
                    <p>New York</p>
                  </div>
                </div>
                <div class="p-4 text-black" style="background-color: #f8f9fa;">
                  <div class="d-flex justify-content-end text-center py-1">
                 
                    <button type="button" class="btn btn-outline-dark m-3" data-mdb-ripple-color="dark" style="z-index: 1;">
                      Download CV
                    </button>
                    <button type="button" class="btn btn-outline-dark m-3 " data-mdb-ripple-color="dark" style="z-index: 1;">
                      messege
                    </button>

                  </div>
                </div>
                <div class="card-body p-4 text-black">
                  <div class="mb-5">
                    <p class="lead fw-normal mb-1">About</p>
                    <div class="p-4" style="background-color: #f8f9fa;">
                      <p class="font-italic mb-1">Web Developer</p>
                      <p class="font-italic mb-1">Lives in New York</p>
                      <p class="font-italic mb-0">Photographer</p>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center mb-4">
                    <p class="lead fw-normal mb-0">Recent photos</p>
                    <p class="mb-0"><a href="#!" class="text-muted">Show all</a></p>
                  </div>
                  <div class="row g-2">
                    <div class="col mb-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp" alt="image 1" class="w-100 rounded-3">
                    </div>
                    <div class="col mb-2">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp" alt="image 1" class="w-100 rounded-3">
                    </div>
                  </div>
                  <div class="row g-2">
                    <div class="col">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" alt="image 1" class="w-100 rounded-3">
                    </div>
                    <div class="col">
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp" alt="image 1" class="w-100 rounded-3">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


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

   
  
    @include('front.components.footer')
