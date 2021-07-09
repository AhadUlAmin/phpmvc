<?php $this->view("header",$data);?>
	<section id="form" style="margin-top: 25px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align:center;">
	
				<div class="col-sm-4" style="display:inline-block;float:none;">
					<div class="signup-form"><!--sign up form-->
					<span style="color:red;font-weight:700"> <?php err(); ?> </span>
					
						<h2>New User Signup!</h2>
						<form action="#" method="POST">
							<input name="userFirstName" type="text" placeholder="First Name"/>
							<input name="userLastName" type="text" placeholder="Last Name"/>
							<input name="userEmail" type="email" placeholder="Email Address"/>
							<input name="userPassword" type="password" placeholder="Password"/>
							<button  type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php $this->view("footer",$data);?>