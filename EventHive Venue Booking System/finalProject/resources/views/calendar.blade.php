<!DOCTYPE html>
<html>
<head>
  <title> <?php echo "EVENT HIVE | Goldwater Convention Center" ?> </title>
  <base href = "calendar.php" />
	<style>
	* {box-sizing:border-box;}
	ul {list-style-type: none;}
	body {font-family: Verdana,sans-serif;}

	.month {
		padding: 70px 25px;
		width: 100%;
		background: #1abc9c;
	}

	.month ul {
		margin: 0;
		padding: 0;
	}

	.month ul li {
		color: white;
		font-size: 20px;
		text-transform: uppercase;
		letter-spacing: 3px;
	}

	.month .prev {
		float: left;
		padding-top: 10px;
	}

	.month .next {
		float: right;
		padding-top: 10px;
	}

	.weekdays {
		margin: 0;
		padding: 10px 0;
		background-color: #ddd;
	}

	.weekdays li {
		display: inline-block;
		width: 13.6%;
		color: #666;
		text-align: center;
	}

	.days {
		padding: 10px 0;
		background: #eee;
		margin: 0;
	}

	.days li {
		list-style-type: none;
		display: inline-block;
		width: 14%;
		text-align: center;
		margin-bottom: 5px;
		font-size:12px;
		color: #777;
	}

	.days li .active {
		padding: 5px;
		background: #1abc9c;
		color: white !important;
	}

	.days li .booked {
		padding: 5px;
		background: #DC143C;
		color: white !important;
	}

	.days li .bookedP {
		padding: 5px;
		background: #FFA500;
		color: white !important;
	}

	.days li .bookedS {
		padding: 5px;
		padding-left: 9px;
		padding-right: 9px;
		background: #DC143C;
		color: white !important;
	}

	/* Add media queries for smaller screens */
	@media screen and (max-width:720px) {
		.weekdays li, .days li {width: 13.1%;}
	}

	@media screen and (max-width: 420px) {
		.weekdays li, .days li {width: 12.5%;}
		.days li .active {padding: 2px;}
	}

	@media screen and (max-width: 290px) {
		.weekdays li, .days li {width: 12.2%;}
	}
	</style>
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


<main style = "	max-width: 1190px;" >

			<div class = "gallery">
				<img src = "img/venue1.jpg" > </img>
				<img src = "img/venue2.jpg" > </img>
				<img src = "img/venue3.jpg" > </img>
				<img src = "img/venue4.jpg" > </img>
			</div>
			<br>
			<img src = "img/center_logo.png" > </img> 
			<br><br>

<br>

<h2 style = "text-align: center;" >Click on an available date to place a booking.</h2>

<div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li style="text-align:center">
      June<br>
      <span style="font-size:18px">2017</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<?php 
echo '<ul class="days"> ';

  
  for($i=1 ; $i<10;$i++){
     echo '<li><span class="bookedS" title="Booked">'.$i.'</span></li>' ;
  }
  
    $nextPage = "http://127.0.0.1:8000/form";
  for($i=10 ; $i<=31;$i++){
    if($i== 13 or $i == 15 or $i == 19 or $i == 20 ){
       echo '<li><a href="'.$nextPage.'" title="Avaiable in the evening" style="text-decoration: none;"><span class="bookedP">'.$i.'</span></a></li>' ;
    }elseif($i== 16 or $i == 21 or $i == 25){
       echo '<li><a href="'.$nextPage.'" title="Avaiable in the day" style="text-decoration: none;"><span class="bookedP">'.$i.'</span></a></li>' ;
    }else{
       echo '<li><a href="'.$nextPage.'" title="Avaiable" style="text-decoration: none;"><span class="active">'.$i.'</span></a></li>';
    }
  }

echo '</ul>';
?>
</main>
</body>
</html>
