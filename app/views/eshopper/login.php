<?php $this->view("header",$data);?>
	<section id="form" style="margin-top: 25px;"><!--form-->
		<div class="container">
			<div class="row" style="text-align:center;">
				<div class="col-sm-4  col-sm-offset-1" style="display:inline-block;float:none;">
					<div class="login-form"><!--login form-->
					<span style="color:red;font-weight:700"> <?php err(); ?> </span>
						<h2>Login to your account</h2>
						<form  method="POST">
							<input name="userEmail" type="email" placeholder="Email Adress" />
							<input name="userPassword" type="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
						<br>
						<p> 
							Don't have an account ?<a href="<?= ROOT ?>signup">Signup here</a>  
						</p>
					</div><!--/login form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php $this->view("footer",$data);?>