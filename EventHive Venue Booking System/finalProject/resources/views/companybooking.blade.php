<html>
	<head>
		<title> <?php echo "EVENT HIVE | Goldwater Convention Center" ?> </title>
		<base href = "Information.php" />
		<link href = "css_Information.css" rel = "stylesheet" />
	</head>
	
	<body>
		<header> 
			<div class = "container">
				<img src = "img/event_hive3.png" > </img>
			</div>
			<div class = "logout">
				Home | Logged in as Gold Water Convention Center | Edit Profile | Logout
			</div>
		</header>
		
		<header style = "height:40px; background: linear-gradient(#C0C0C0, #FFFFFF, #C0C0C0);word-spacing: 100px;" > 
			
			<a href="{{ URL::to('companylogin')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Information" >
			</a>
			
			<input type = "submit" value = "Booking">

			<input type = "submit" value = "Packages">	

			<input type = "submit" value = "Reviews">			
			
			<input type = "submit" value = "Contact Us">
			
		</header>
		
		<main style = "text-align: center;" >

			<img src = "img/center_logo.png" > </img> 
			<br><br>
			
			<h1> Pending Bookings </h1> 
			<br><br>
			<h2>
			1. You have a request from mumina mahmood.
			<a href = "" > See details </a> </li>
			</h2>
		</main>
	</body>
</html>

