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
				Home | Logged in as Mumina | Logout
			</div>
		</header>
		
		<header style = "height:40px; background: linear-gradient(#C0C0C0, #FFFFFF, #C0C0C0);word-spacing: 100px;" > 
			
			<a href="{{ URL::to('Information')}}"  style = "text-decoration: none;" >
				<input type = "submit" value = "Information" >
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
			<div class = "Info">
				<h2> About Us: </h2>
				<br>
				For the first time in Bangladesh the most modern, most opulent and international standard Convention Center is unveiled –named GOLDWATER 
				CONVENTION CENTER. The convention center is ideal for wedding, anniversaries, birthdays, corporate events, seminars, meetings, special 
				business events, product launchings and more. Goldwater Convention Center is located at level 16, 17, 18 and 19 and is laid over an area 
				of 40000 square feet. Goldwater Convention Center differs from other convention centers as everything that is needed to support an 
				event has been carefully worked out to make it not only the most gorgeous venue but also most gorgeous event settings by its Axmisters 
				fireproof carpet, Roman marble sculptures, LED down lights, custom made Crystal beaded Chandeliers, high end linens, tableware’s and 
				flatware’s, sophisticated machineries and equipments. To be precise it’s simply drop-dead gorgeous.
				<br><br>
				<h2> Products and Services: </h2>
				<br>
				Indoor, Intercom, Safety Grill, Fire exit, Sensor lights, Fire protection, Fire alarm system, Security alarm system, Video intercom, 
				Govt. gas connection, Electric connection, Gas cylinder system, Imported fittings, Hot water connection, IPS, Outdoor, Elevator, 
				Security guard, Generator, CCTV, Landscape garden, Community hall, WASA connection, Water tank, Solar panels, Prayer room, 
				Visitor's car parking, Guard's room.
			</div>
		</main>
	</body>
</html>

