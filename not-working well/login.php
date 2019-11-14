<?php
include('server.php')
?>



<?php
include 'header.php';
?>


<div class="row justify-content-center">
<div class="form-body">
	<h1 class="text-center">Login</h1>
		<div class="login-form">
			<form action="login.php" method="post">
				
				<div class="txtb">		
					<label form="username">Username</label>
					<input type="username" name="username" required>
				</div>

				<div class="txtb">		
					<label form="password">Password</label>
					<input type="password" name="password" required>
				</div>

				<button type="submit" class="neon-submit" name="login"> Submit</button>
			
				<div class="bottom-text">
					<p>Don't have an account?
						<a href="register.php">Sign-up here</a>
					</p>
				</div>
			</form>
		</div>
</div>
</div>
	





<?php
include 'footer.php';
?>
