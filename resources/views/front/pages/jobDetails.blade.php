@include('front.components.header')

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


     
    @include('front.components.footer')
