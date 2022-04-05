@include('front.components.header')

  
 <div style="margin-top: 150px; margin-bottom: 100px;" class=" p-5 d-flex align-items-center justify-content-center w-100">
  <div class="row d-flex justify-content-center align-items-center">
  <div class="col-lg-4 col-md-4 col-sm-4  d-flex align-items-center justify-content-center ">
    <img src="../assetes/svg/undraw_personal_email_re_4lx7.svg" class="w-100" />
  </div>
<div class=" col-lg-4 col-md-5" >
  
  <form style="color: #ffeba7;">
    <h1 style="color: #ffeba7;">#ContactUs</h1>
    <div class="mb-3">
      <label for="exampleInputEmail" class="form-label">Email address</label>
      <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Name</label>
      <input type="text" class="form-control" id="nameInputEmail1" aria-describedby="emailHelp"> 
    </div>
    <div class="mb-3">
      <label for="exampleInputName" class="form-label">Messege</label>
      <textarea class="form-control" ></textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">send</button>
  </form>
</div>

</div>

</div>

    
@include('front.components.footer')
