@extends('master')
@section('helo')
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
@endsection