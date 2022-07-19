<!DOCTYPE html>

	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>Дамашная бухгалтерия</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/main1.css" />
		<script src="/js/jquery-3.4.1.min.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
    
    
		<div id="wrapper">
			<div id="header">
				
        
        <img   src="../images/bux.png">
    
					
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/services">Основное</a></li>
						<li><a href="/portfolio">Анализ</a></li>
						<li class="last"><a href="/contacts">Контакты</a></li>
						<li><a href="/login">Войти</a></li>
						<li><a href="/reg">Регистрация</a></li>
						
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<br/><br/><br/><br/><br/><br/>
			<div id="page">
				
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			
				
		
		<div id ="footer">
			 <h3> С Уважением, Хасанов Р. &copy; 2022</h3>
		</div>
	</body>
</html>