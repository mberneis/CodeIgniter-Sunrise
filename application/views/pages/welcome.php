<div class="container">
	<div class="hero-unit">
		<h1>Welcome to CodeIgniter Sunrise</h1>
		<a href="welcome/testdb">test db</a> |
		<a href="welcome/info">info</a>
		<p><?php 
			echo date("H:i:s") . "<pre>";
			print_r ($_SERVER);
		 	?>
		 </p>
	</div>
</div>
