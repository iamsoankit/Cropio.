<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="contact.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="icon" href="logo5.png" type="image/x-icon"> 
</head> 
<body>
	<!-- Navigation Bar -->
	<header>
        <h1>Cropio</h1>
        <nav>
            <ul>
                <li><a href="index.html"><small>Home</small></a></li>
                <li><a href="about.html"><small>About</small></a></li>
                <li><a href="insert.php"><small>Contact Us</small></a></li>
            </ul>
        </nav>
    </header>
	<!-- Page Content -->
	<div class="container mt-4">
        <!-- <img class="imgques" src="questionmark.png" alt="questionmark" width="300px"> -->
		<h1 class="mb-4">Contact Us</h1>
		<div class="row">
			<div class="col-md-6">
				<form method="post" action="process.php">
					<div class="form-group">
						<label for="name">Name:</label>
						<input type="text" class="form-control" id="name" placeholder="Enter your name" name="name" required>
					</div>
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
					</div>
					<div class="form-group">
						<label for="subject">Subject:</label>
						<input type="text" class="form-control" id="subject" placeholder="Enter subject" name="subject" required>
					</div>
					<div class="form-group">
						<label for="message">Message:</label>
						<textarea class="form-control" rows="5" id="message" name="message" required></textarea>
					</div>
					<button type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
					<!-- <input type="submit" class="btn btn-primary" name="submit" value="submit"> -->
				</form>
			</div>
			<div class="col-md-6">
				<h3>Address:</h3>
				<p>Kings's Palace 5, Campus-12<br>Bhubaneswar, Odisha</p>
				<h3>Phone:</h3>
				<p>143</p>
				<h3>Email:</h3>
				<p>contact@myagriculturewebsite.com</p>
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer>
		<div class="footer-container">
		<h3 class="footer-logo">Cropio</h3>
		<p>&copy; 2023 Cropio</p>
	    <ul class="footer-social">
		<li><a href="#">Facebook</a></li>
		<li><a href="#">Twitter</a></li>
		<li><a href="#">Instagram</a></li>
	    </ul>
	</footer>
</body>
</html>