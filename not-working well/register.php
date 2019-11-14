<?php
include('server.php')
?>



<?php
include 'header.php';
?>


<div class="row justify-content-center">
<div class="form-body">
	<h1 class="text-center">Register</h1>
	<div class="login-form">		
		<form action="register.php" method="post">

			
			
			<div class="txtb">		
				<label form="username">Username</label>
				<input type="username" name="username" required>
			</div>

			<div class="txtb">		
				<label form="email">Email</label>
				<input type="email" name="email" required>
			</div>

			<div class="txtb">		
				<label form="telephone">Telephone</label>
				<input type="telephone" name="telephone" required>
			</div>

			<div class="txtb">		
				<label form="password">Password</label>
				<input type="password" name="password" required>
			</div>

			<div class="txtb">		
				<label form="password">Confirm Password</label>
				<input type="password" name="confirm_password" required>
			</div>

			<button type="submit" class="neon-submit" name="reg_user"> Submit</button>
		
			<div class="bottom-text row text-center justify-content-center">
				<p>Already a User? 
					<a href="login.php">Login Here</a> 
				</p>
			</div>
		</form>
	</div>
</div>
</div>







<?php
include 'footer.php';
?>