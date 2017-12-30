<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<style>

			body {
				height: 100vh;
				background-color: #333;
			}

			.main {
					height: calc(100% - 121px);
			}

			img {
				max-width: 100%;
				max-height: 100%;
			}

			.nav-pills> li.active>a{
				background-color: #ec3642;
			}

			.myHeader {
					display: flex;
					flex-direction: column;
					align-items: center;
					width: 100%;
					/*height: 40px;*/
					background-color: #ec3642;
			}

			.navButtons {
				display: flex;
				justify-content: space-around;
				width: 100%;
			}

			.headerLogo {
				display: flex;
				justify-content: center;
				background-color: rgb(36, 36, 36);
				width: 100%;
				height: 81px;
			}

			.body {
				display: flex;
				align-items: flex-start;
				background-image: url(https://www.cdn.spotebi.com/wp-content/uploads/2015/03/be-confident-workout-motivation-quote.jpg);
				background-size: 1339px 693px;
				background-repeat: no-repeat;
				height: 100%;
			}

			.title {
					display: flex;
					justify-content: center;
					align-content: flex-start;

					margin-top: 40px;

					width: 100%;
					height: 100%;

					font-size: 60px;
					font-family: Ubuntu;
					font-weight: 700;
					text-transform: uppercase;
					color: #ec3642;
			}

			.nav-pills> li#blocked{
				disabled: true;
			}
			.nav>li#blocked >a:hover, .nav>li#blocked>a:focus {
				background-color: #e60000;
			}

			.here {
					background-color: #c82d38 !important;
			}

		</style>
	</head>
	<body>

		<div class="main">

			<div class="myHeader">
				<div class="headerLogo">
					<img src="logo.png" />
				</div>
				<ul class="nav nav-pills navbar-right navButtons">
					<li role="presentation" class="active"><a href="index.php">Početna strana</a></li>
					<li role="presentation" class="active"><a href="oNama.php">O nama</a></li>
					<li role="presentation" class="active"><a href="treneri.php">Treneri</a></li>
					<li role="presentation" class="active"><a href="aktivnosti.php">Naše aktivnosti</a></li>
					<li role="presentation" class="active"><a href="prijavljivanje.php">Prijavljivanje</a></li>
					<li role="presentation" class="active"><a href="registracija.php">Registracija</a></li>
					<li role="presentation" class="active"><a href="#">Odjavljivanje</a></li>
					<li role="presentation" class="active"><a href="licnaStrana.php">Lična strana</a></li>
					<li role="presentation" class="active" id="blocked"><a class="here" href="#"><img src="icon.png">Dobrodošao usertest!</a></li>
				</ul>
			</div>


			<div class="body">
				<div class="title">
					 <div> Dobrodosao!!! </div>
				</div>
			</div>
		</div>

	</body>
</html>
