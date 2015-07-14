<div class="container">
	<div class="hero-unit">
		<h1>Welcome to CodeIgniter Sunrise v1.0</h1>
		<a href="welcome/testdb">Test DB</a> |
		<a href="welcome/info">Info</a>
		<p><?php 
			echo date("H:i:s") . "<pre>";
			print_r ($_SERVER);
		 	?>
		 </p>
	</div>
</div>
