<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon.png">
	<title>bKash Calculator</title>
	
	<style type="text/css">
	
	body{
		background: skyblue;
		text-align: center;
		margin: 0;
		padding: 0;
	}

	body,
	html {
		width: 100%;
		height: 100%;
	}
	.title {
		font-size: 57px;
		font-style: italic;
		font-weight: bold;
		color: #e0dfdc;
		letter-spacing: .06em;
		text-shadow: 0 -1px 0 #fff, 0 1px 0 #2e2e2e, 0 2px 0 #2c2c2c, 0 3px 0 #2a2a2a, 0 4px 0 #282828, 0 5px 0 #262626, 0 6px 0 #242424, 0 7px 0 #222, 0 8px 0 #202020, 0 9px 0 #1e1e1e, 0 10px 0 #1c1c1c, 0 11px 0 #1a1a1a, 0 12px 0 #181818, 0 13px 0 #161616, 0 14px 0 #141414, 0 15px 0 #121212, 0 22px 30px rgba(0, 0, 0, 0.9);
	}
	h2{
		color:;
		font-size:45px;

	}
	.foter{
		color: #f109e3;
		font-size: 45px;
		animation-name: markcolor;
		animation-duration:  6s;
		animation-iteration-count: infinite;
		animation-direction: alternate;
	}

	/* Safari 4.0 - 8.0 */
	@-webkit-keyframes mymove {
	    0%   { color: red; }
	    25%  { color: #000; }
	    50%  { color: #EF6C00; }
	    75%  { color: green; }
	    100% { color: #f109e3; }
	}

	@keyframes markcolor {
		0%   { color: red; }
	    25%  { color: #000; }
	    50%  { color: #EF6C00; }
	    75%  { color: green; }
	    100% { color: #f109e3; }
	}

	.cal-des {
		background:#cbf328; 
		font-size:25px; 
		text-align:center; 
		width: 200px; 
		height: 30px;
		font-style: italic;
		font-family: 'Crimson Text', serif;
	}

	.d-table {
		display: table;
		height: 100%;
		width: 100%;
	}

	.d-table-cell {
		display: table-cell;
		vertical-align: middle;
		width: 100%;
	}



	.button {
		background-color: #fff;
		color: #fff;
		display: inline-block;
		font-size: 25px;
		font-style: italic;
		padding: 4px 45px;
		margin-left: 15px;
		border-radius: 95px 5px;
		box-shadow: 3px 5px 5px grey;
		text-shadow: 1px 1px 2px black, 0 0 15px blue, 0 0 5px darkblue;
		font-family: 'Crimson Text', serif;
	}

	.button:hover {
		color: #FFF;
		text-shadow: 1px 1px 2px red, 0 0 15px red, 0 0 5px red;
		background-color: ;
		text-decoration: none;
		cursor: pointer;
	}

	.show {
		font-style: italic;
		line-height: 22px;
		font-family: 'Crimson Text', serif;
	}

	.show1 {
		color: green;
		padding-top: 20px;
	}

	.show2 {
		color: red;
	}

	.show5 {
		color: #660099;
	}

	.show4 {
		color: #990000;
	}

	.show3 {
		color: #da258b;
	}

	@media (max-width: 642px) {
		.button {
			margin-top: 15px;
		}
	}

	@media (max-width: 480px) {
		.show1 {
			padding-top: 50px;
		}

		.show {
			line-height: 20px;
			font-size: 40px;
		}
	}

	@media (max-width: 455px) {
		.show {
			line-height:15px;
			font-size: 37px;
		}
	}

	@media (max-width: 431px) {
		.cal-des {
			margin-bottom: 7px;
			padding-right: 16px;
		}
	}

	@media (max-width: 417px) {
		.button {
			margin-top: 5px;
			margin-left: 0;
		}

		.title {
			font-size: 45px;
		}
	}

	@media (max-width: 385px) {
		.show {
			line-height: 17px;
			font-size: 30px;
		}

		.foter {
			font-size: 33px;
			margin-top: 55px;
		}

		.show1 {
			padding-top: 35px;
		}

		.title {
			font-size: 40px;
		}
	}

	@media (max-width: 360px) {
		.title {
			font-size: 37px;
		}
	}

	@media (max-width: 320px) {

		.title {
			font-size: 33px;
		}

		.show {
			line-height: 17px;
			font-size: 26px;
		}
	}

</style>
</head>
<body>
	<div class="d-table">
		<div class="d-table-cell">

			<form action="" method="post">

				<p class="title"><i>bKash Calculator</i></p>

				<input type="text" class="cal-des" name="box1" placeholder="Enter Doller" required="required" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')" />

				<input type="text"class="cal-des"  name="box2" placeholder="Doller Rate" required="required" onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')" />

				<!-- 

					Only Number: onkeyup="this.value=this.value.replace(/[^\d]/,'')"
					Only Number + Dot: onkeyup="this.value=this.value.replace(/[^0-9\.]/g,'')"

				 -->

				<input type="submit" class="button" name="p1" value="Calculate" />

			</form>

			<?php

			if ($_SERVER["REQUEST_METHOD"] == "POST") {

				$box1 = $_POST['box1'];
				$box2 = $_POST['box2'];

				$p1 = $_POST['p1'];
				$bkash_charge = ($box1*$box2)*0.0185;
				$total = ($box1*$box2)+$bkash_charge;
				$tota2 = $box1*$box2;


				if($p1 == "Calculate"){
					echo "<h2 class='show1 show'>Doller = $$box1</h2>";
					echo "<h2 class='show2 show'>Doller Rate = $box2 BDT</h2>";
					echo "<h2 class='show5 show'>Net Ammount = $tota2 BDT</h2>";
					echo "<h2 class='show3 show'>Bkash Charge = $bkash_charge BDT</h2>";
					echo "<h2 class='show4 show'>Total Amount = $total BDT</h2>";
					echo "<style>@media (min-width: 992px) { .title { margin-bottom: 30px; margin-top: 35px; } }</style>";
				}

			}	
			?>
			<p class="foter"><i>Developed by kanon</i></p>

		</div>
	</div>

</body>
</html>
