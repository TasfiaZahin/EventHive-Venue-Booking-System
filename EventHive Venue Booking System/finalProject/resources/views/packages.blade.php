<html>
	<head>
		<title> <?php echo "EVENT HIVE | Goldwater Convention Center" ?> </title>
		<base href = "packages.php" />
		<link href = "style.css" rel = "stylesheet" />
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
			
			<div class="wrap">
			<div class="table">
			<ul style="list-style-type: none";>
			  
			<li>
			  <div class="top">
				<h2>Package 1</h2>
				<div class="rectangle">BDT. 119999</div>
			  </div>
			  <div class="bottom">
				<p>Venue</p>
				<p>Stage Decorations</p>
				<br><br><br>
				<div class="book">
					<a href="{{ URL::to('calendar')}}"  style = "text-decoration: none;" >
						<input type = "submit" value = "Book">
					</a>
				</div>
			  </div>
			</li>
			  
			<li>
			  <div class="top">
				<h2>Package 2</h2>
				<div class="rectangle">BDT. 139999</div>
			  </div>
				<div class="bottom">
				<p>Venue</p>
				<p>Stage Decorations</p>
				<p>Wall Decorations</p>
				<br><br>
				<div class="book">
					<a href="{{ URL::to('calendar')}}"  style = "text-decoration: none;" >
						<input type = "submit" value = "Book">
					</a>
				</div>
			  </div>
			</li>
			  
			<li>
			  <div class="top">
				<h2>Package 3</h2>
				<div class="rectangle">BDT. 149999</div>
			  </div>
				<div class="bottom">
				<p>Venue</p>
				<p>Stage Decorations</p>
				<p>Wall Decorations</p>
				<p>Ceiling Decorations</p>
				<br>
				<div class="book">
					<a href="{{ URL::to('calendar')}}"  style = "text-decoration: none;" >
						<input type = "submit" value = "Book">
					</a>
				</div>
			  </div>
			</li>
			  
			<li>
			  <div class="top">
				<h2>Package 4</h2>
				<div class="rectangle">BDT. 199999</div>
			  </div>
				<div class="bottom">
				<p>Venue</p>
				<p>Stage Decorations</p>
				<p>Wall Decorations</p>
				<p>Ceiling Decorations</p>
				<p>Catering</p>
				<div class="book">
					<a href="{{ URL::to('calendar')}}"  style = "text-decoration: none;" >
						<input type = "submit" value = "Book">
					</a>
				</div>
			  </div>
			</li>
			  
			</ul>
			</div>
			</div>
		</main>
	</body>
</html>

