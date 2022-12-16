<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="<?= base_url('login') ?>" method="post">
		
			<h1 class="text-center" style="margin-bottom:0px"><center>Login</center></h1>	
			<center>
				<p>Please provide your details</p>
			</center>	
			
			<div class="login-fields">
				<?php
				if(@$error) {
				?>
				<div class="alert"><button type="button" class="close" data-dismiss="alert">×</button>Your username or password are invalid</div>
				<?php } ?>
				
				<div class="field">
					<label for="username">Username</label>
					<input type="text" id="username" autocomplete="off" required name="username" value="" placeholder="Username" class="login username-field" />
				</div> 
				
				<div class="field">
					<label for="password">Password:</label>
					<input type="password" id="password" autocomplete="off" required name="password" value="" placeholder="Password" class="login password-field"/>
				</div> 
				<div class="field">
					<button class="button btn btn-primary btn-block rounded-0 btn-large">Sign In</button>
				</div>
				
			</div> 
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="Field" name="Field" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="4" />
					<label class="choice" for="Field">Keep me signed in</label>
				</span>
									
				
			</div> 
			
			
			
		</form>
		
	</div> 
	
</div> 



<div class="login-extra">
</div> 
