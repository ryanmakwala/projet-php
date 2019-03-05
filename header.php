<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="style/form.css">
<div id="HeaderContainer">

	<div id="Menu">
		<div id="MenuLigne1">
			<div id="Logo">
				<a href="index.php"><img src="http://infans.fr/img/Logophrase2017.jpg" /></a>
			</div>
			<div id="Num"><img src="http://infans.fr/img/num_vert_infans.gif" /></div>
			<div id="contact_but"><p id="btn"><span class="icon_char">&#9990;</span>  Me rappeler</p>
				<div id="form_rappel_pop">
					<div id="form_rappel">
						<span class="clo">&times;</span>
						<h3><img id="quest" src="http://infans.fr/img/question.png"> Une question ? </h3>
						<p>&#9658; Laissez nous votre numéro, l'un de nos conseillers vous rappelera dans les plus brefs délais</p>
						<form action="http://infans.fr/includes/process_rappel.php" method="post" name="rappel_form">
							<input type="text" name="tel" id="tel" pattern="[+0-9]*" placeholder="Téléphone" required>
							<input type="hidden" name="url" id="url" value="<?php echo $_SERVER['PHP_SELF'] ?>">
							<input id="submit_rap" type="submit" value="Valider">
						</form>
					<?php
					if($_GET['contact'] == 'success') {
						echo "<p id='success'>Numéro enregistré. Nous vous rappelons dans les plus bref délais.</p>";
						echo "<script type='text/javascript'>var x = document.getElementById('form_rappel_pop'); x.style.display = 'block';</script>";
					}
					?>
					</div>
				</div>
			</div>
			<div id="FB">
				<a target="_blank" href="http://infans.fr/login.php"><p id="login_p"><img id="login_logo" src="http://infans.fr/img/moncompte.png" />Se connecter</p></a>
				<a target="_blank" href="https://www.facebook.com/infansformation/"><img id="FB_log" src="http://infans.fr/img/logo_fb.png" /></a>
				<a target="_blank" href="https://fr.linkedin.com/company/infans-group"><img id="linkedin" src="http://infans.fr/img/linkedin.jpg" /></a>
			</div>
		</div>
		<div id="MenuLigne2">
			<div class="home" id="index">
				<a href="http://infans.fr"><img src="http://infans.fr/img/home.png" /></a>
			</div>
			<div class="MenuItem" id="catalogue">
				<a href="">Formations 2018 &#x25BC</a>
				<div class="MenuDeroul">
					<a href="http://infans.fr/formation.php?p=SST1&t=prev"><img src="img/prev.png"> Se certifier Sauveteur Secouriste du travail</a>
					<a href="http://infans.fr/formation.php?p=SST2&t=prev"><img src="img/prev.png"> Maintenir ses acquis Sauveteur Secouriste du travail</a>
					<a href="http://infans.fr/formation.php?p=stress1&t=prev"><img src="img/prev.png"> Gérer son stress et se relaxer</a>
					<a href="http://infans.fr/formation.php?p=stress2&t=prev"><img src="img/prev.png"> Se perfectionner en gestion du stress</a>
					<a href="http://infans.fr/formation.php?p=internet&t=bur"><img src="img/bureau.png"> Se former aux outils internet</a>
					<a href="http://infans.fr/formation.php?p=word&t=bur"><img src="img/bureau.png"> Se former au logiciel Word</a>
					<a href="http://infans.fr/formation.php?p=excel&t=bur"><img src="img/bureau.png"> Se former au logiciel Excel</a>
					<a href="http://infans.fr/formation.php?p=comm1&t=langue"><img src="img/langue.png"> Communication gestuelle</a>
					<a href="http://infans.fr/formation.php?p=LSF&t=langue"><img src="img/langue.png"> Se former a la langue des signes française</a>
					<a href="http://infans.fr/formation.php?p=anglais&t=langue"><img src="img/langue.png"> Se former à l'anglais</a>
					<a href="http://infans.fr/formation.php?p=espagnol&t=langue"><img src="img/langue.png"> Se former à l'espagnol</a>
					<a href="http://infans.fr/formation.php?p=italien&t=langue"><img src="img/langue.png"> Se former à l'italien</a>
					<a href="http://infans.fr/formation.php?p=faber1&t=comm"><img src="img/comm.png"> Adapter sa communication selon Faber et Mazlish</a>
					<a href="http://infans.fr/formation.php?p=faber2&t=comm"><img src="img/comm.png"> Perfectionner sa communication selon Faber et Mazlish</a>
					<a href="http://infans.fr/formation.php?p=montessori1&t=comm"><img src="img/comm.png"> Méthode Montessori pour les plus de 3 ans</a>
					<a href="http://infans.fr/formation.php?p=montessori2&t=comm"><img src="img/comm.png"> Méthode Montessori pour les moins de 3 ans</a>
				</div>
			</div>
			<div class="MenuItem" id="distance">
				<a href="http://infans.fr/page.php?p=distance">Formations à distance &#x25BC</a>
				<div class="MenuDeroul">
					<a href="http://infans.fr/formation.php?p=anglais&t=langue"><img src="img/langue.png"> Se former à distance à l'anglais</a>
					<a href="http://infans.fr/formation.php?p=espagnol&t=langue"><img src="img/langue.png"> Se former à distance à l'espagnol</a>
					<a href="http://infans.fr/formation.php?p=italien&t=langue"><img src="img/langue.png"> Se former à distance à l'italien</a>
					<a href="http://infans.fr/formation.php?p=LSF&t=langue"><img src="img/langue.png"> Se former à distance à la langue des signes</a>
				</div>
			</div>
			<div class="MenuItem" id="partir">
				<a href="http://infans.fr/partir.php">Partir en formation</a>
			</div>
			<div class="MenuItem" id="financer">
				<a href="http://infans.fr/financer.php">Financer sa formation</a>
			</div>
			<div class="MenuItem" id="connaitre">
				<a href="http://infans.fr/connaitre.php">Nous connaitre</a>
			</div>
			<div class="MenuItem" id="contacter">
				<a href="http://infans.fr/contacter.php">Nous contacter</a>
			</div>
		</div>
	</div>

</div>

<script type="text/javascript">
		// var x = document.getElementById("form_rappel");

		// function showForm() {
		// 	var x = document.getElementById("form_rappel");
	 //        x.style.display = "block";
		// } 

		// window.onclick = function(event) {
		// 	var x = document.getElementById("form_rappel");
	 //    	if (event.target == x) {
	 //      	  x.style.display = "none";
	 //   		}
		// }

	var mod = document.getElementById('form_rappel_pop');

	// Get the button that opens the modal
	var but = document.getElementById("btn");

	var spa = document.getElementsByClassName("clo")[0];

	// When the user clicks the button, open the modal 
	but.onclick = function() {
		mod.style.display = "block";
	}

	spa.onclick = function() {
   		mod.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {

		if (event.target == mod) {
        	mod.style.display = "none";
    	}
	}

</script>