<html>
	<head>
		<title> <?php echo "EVENT HIVE | Goldwater Convention Center" ?> </title>
		<base href = "contactUs.php" />
		<link href = "contactUs.css" rel = "stylesheet" />
	</head>
	
	<body>
		<header> 
			<div class = "container">
				<img src = "img/event_hive3.png" > </img>
			</div>
			<div class = "logout">
				Home | Logged in as Mumina | Logout
			</div>
		</header>
		
		<header style = "height:40px; background: linear-gradient(#C0C0C0, #FFFFFF, #C0C0C0);word-spacing: 100px;" > 

			<a href="{{ URL::to('Information')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Information">
			</a>

			<a href="{{ URL::to('calendar')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Booking">
			</a>

			<a href="{{ URL::to('packages')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Packages">
			</a>	

			<input type = "submit" value = "Reviews">			
			
			<a href="{{ URL::to('contactUs')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Contact Us">
			</a>

		</header>
		
		<main>
			<div class = "gallery">
				<img src = "img/venue1.jpg" > </img>
				<img src = "img/venue2.jpg" > </img>
				<img src = "img/venue3.jpg" > </img>
				<img src = "img/venue4.jpg" > </img>
			</div>
			<br>
			<img src = "img/center_logo.png" > </img> 
			<br><br>
			<div class = "Contact Us"  style = "text-align: center;" >
				<h1> Contact Us: </h1>
				<br>
				<h2> Email: </h2>
				goldwater_dhaka@gmail.com
				<br><br>
				<h2> Mobile: </h2>
				01710123456
				<br><br>
				<h2> Location: </h2>
				34/3 , Lake Circus Road, Dhanmondi, Dhaka 
			</div >
			<div class = "map" style = "text-align: center;" >
				<br><br>
				<img src = "img/map.jpg" > </img>
			</div>
		</main>
	</body>
</html>

