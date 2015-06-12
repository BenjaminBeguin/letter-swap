<html>
	<head>
		<meta chaset="utf-8">
		<script src="js/jquery-2.1.1.js"></script>
		<script src="letter-swap.min.js"></script>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	
	<div class="contenair">	
		<div id="mytxt">
			

		</div>

	</div>
		
	</body>

	<script>

	$(document).ready(function(){

		

		$('#mytxt').letter_swap({
		  speed: 100,
		  waitingTime: 2000,
		  varchar:	["Letter swap" , 'is a javascript pluging', 'with a funny text swap ' , 'animation.' , 'Read the doc', "to know how much it's customizable", 'Easy to use,' ,'free to use.'],
		  loop : true,
		  onlylowercase : true		,
		  onlycaps :false,
		  NumberOfChange : 5
		});



	});

	</script>
</html>
