<!--login-->
<?php
	// Avvia la sessione
	require('funzioni.php');
	$flag = 0;

	if (!isset($_SESSION['nome']) || !isset($_POST['Accedi'])) {
		// L'utente non è autenticato: mostra il form di login
		if (isset($_POST['Accedi'])) {
			// Verifica le credenziali dell'utente
			if ($_POST['nome'] == 'Marco' && $_POST['password'] == 'Marco21') {
				// Autenticazione riuscita: imposta una variabile di sessione per mantenere l'accesso dell'utente
				$_SESSION['nome'] = $_POST['nome'];
				echo '<h4><a href="paginaRiservata.php">Pagina Riservata</a></h4>';
			} else {
				// Autenticazione non riuscita: mostra un messaggio di errore
				$_SESSION['error'] = 'Username o password non validi';
				$flag=1;
				FormHtml();
			}
		} else{
			FormHtml();
		}

	/*FormHtml();*/

} else if((isset($_SESSION['nome']) || isset($_POST['Accedi'])) && !$flag) {
		echo '<h4><a href="paginaRiservata.php">Pagina Riservata</a></h4>';
	}?>
