@extends('components.header')

 
<div class="container-fluid  mt-5">

    
	

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group position-relative">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                        <i class="bi bi-person-bounding-box" style="position: absolute; left: 15px; top: 10px;"></i>		
                      									</div>	
											<div class="form-group mt-2 position-relative">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                        <i class="bi bi-lock " style="position: absolute; left: 15px; top: 10px;"></i>			
                      								</div>
											<a href="/profile" class="btn mt-4">Login</a>
                            				<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<div class="form-group position-relative">
												<input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="off">
                        <i class="bi bi-person-bounding-box" style="position: absolute; left: 15px; top: 10px;"></i>		
											</div>	
											<div class="form-group mt-2 position-relative">
												<input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off">
                        <i class="bi bi-envelope" style="position: absolute; left: 15px; top: 10px;"></i>		
											</div>	
											<div class="form-group mt-2 position-relative">
												<input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off">
                        <i class="bi bi-lock " style="position: absolute; left: 15px; top: 10px;"></i>			
											</div>
											<a href="/profile" class="btn mt-4">Singup</a>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</div>

  
@extends('components.footer')
