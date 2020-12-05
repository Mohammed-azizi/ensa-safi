<html>

<head>

	<meta charset="utf-8">
	<meta name="viewport" comtent="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/logo_college.png" />
	<!-- compatibilité edge-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--===========================-->
	<script src="./js/jquery.js"></script>
	<!-- reglage du viewport pour mobile -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Hind:400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<!--===========================================================-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=arabswell-1" />
	<link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=elmessiri" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>ENSA SAFI</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/style-index.css">
</head>

<body style="background: url('./images/background.jpg');">

	<header>
		<ul class="circles">
			<li><img style="opacity: 20%;" src="./images/logo-safi.png" class="shadow" width="100%" height="auto"></li>
			<li><img style="opacity: 20%;" src="./images/logo-safi.png" class="shadow" width="100%" height="auto"></li>
			<li><img style="opacity: 20%;" src="./images/logo-safi.png" class="shadow" width="100%" height="auto"></li>
			<li><img style="opacity: 20%;" src="./images/logo-safi.png" class="shadow" width="100%" height="auto"></li>
			<li></li>
			<li><img style="opacity: 20%;" src="./images/logo-safi.png" class="shadow" width="100%" height="auto"></li>
			<li></li>
			<li></li>
			<li><img style="opacity: 20%;" src="./images/logo-safi.png" class="shadow" width="100%" height="auto"></li>
			<li></li>
		</ul>

		<div class="row row-header  w-100  m-0 p-0 ">

			<div class="col-lg-12  div-logo  "><img src="./images/logo-safi.png" class="shadow" height="auto"></div>


		</div>

		<div class="row row-header-content w-100 m-0 p-0">

			<div class="col-lg-12">
				<p>
					Bienvenue à la plateforme de gestion de trombinoscope
				</p>


			</div>
			<div class="col-lg-12 ">
				<h1> - ENSA SAFI -</h1>


			</div>

			<div class="col-lg-12">

				<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#exampleModalutilisateur"
					data-whatever="@mdo"><img src="./images/icon-utilisateur.png" width="60px" height="60px" /> Espace
				utilisateur</button>
				
				<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModaletudient"
					data-whatever="@mdo"><img src="./images/icon-etudient.png" width="60px" height="60px" />Espace
					étudiant</button>

			</div>


		</div>



		<!-- model espace utilasteur -->
		<div class="modal fade " id="exampleModalutilisateur" tabindex="-1" aria-labelledby="exampleModalLabel"
			aria-hidden="true">

			<div class="modal-dialog ">
				<div class="modal-content  shadow-lg">
					<img src="./images/logo-safi.png" class="rounded-circle shadow" width="20%">
					<div class="modal-header" style="border: none !important;">
						<h3 class="modal-title" id="exampleModalLabel"> Authentification</h3>

					</div>
					<div class="modal-header ">
						<small id="emailHelp" class="form-text text-muted ">Espace utilisateur</small>

					</div>
					<div class="modal-body">
						<form action="utilisateur/page_utilisateur.php" method="get">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text text-muted">Example : -----@gmail.com</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Mot de passe</label>
								<input type="password" class="form-control" id="exampleInputPassword1">
							</div>

							<button type="submit" class="btn btn-danger" >Connecter</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light" data-dismiss="modal">Exite</button>

					</div>
				</div>
			</div>
		</div>
		<!-- fin  model espace utilasteur -->



		<!-- model espace etudient -->
		<div class="modal fade " id="exampleModaletudient" tabindex="-1" aria-labelledby="exampleModalLabel"
			aria-hidden="true">

			<div class="modal-dialog ">
				<div class="modal-content  shadow-sm  ">
					<img src="./images/logo-safi.png" class="rounded-circle shadow" width="20%">
					<div class="modal-header" style="border: none !important;">
						<h3 class="modal-title" id="exampleModalLabel"> Authentification</h3>

					</div>
					<div class="modal-header ">
						<small style="color: var(--warning) !important;">Espace Etudient</small>

					</div>
					<div class="modal-body">
						<form>
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1"
									aria-describedby="emailHelp">
								<small id="emailHelp" class="form-text  "
									style="color: var(--warning) !important;">Example : -----@gmail.com</small>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Mot de passe</label>
								<input type="password" class="form-control" id="exampleInputPassword1">
							</div>

							<button type="submit" class="btn btn-warning">Connecter</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-light" data-dismiss="modal">Exite</button>

					</div>
				</div>
			</div>
		</div>
		<!-- fin  model espace etudient -->
	</header>










	<script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
	<script src="./js/javascript.js"></script>
</body>

</html>