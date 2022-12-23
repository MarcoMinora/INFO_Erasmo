<!--login-->
<?php
	// Avvia la sessione	
	require('funzioni.php');
	$flag = 0;
	$errMsg = "";
	if (isset($_GET['error'])) {
		// Mostra il messaggio di errore passato tramite query string
		$errMsg=$_GET['error'];  
		$_SESSION['IdPagRis']=$_GET['idPagRis'];
		?> 
		<h3><?=$errMsg?></h3>
		<?php
	}
	

	if (!isset($_SESSION['nome']) || !isset($_POST['Accedi'])) {

		// L'utente non è autenticato: mostra il form di login
		if (isset($_POST['Accedi'])) {
			// Verifica le credenziali dell'utente
			if ($_POST['nome'] == 'Marco' && $_POST['password'] == 'Marco21') {
				// Autenticazione riuscita: imposta una variabile di sessione per mantenere l'accesso dell'utente
				$_SESSION['nome'] = $_POST['nome'];
				
				if(isset($_SESSION['IdPagRis'])){
					header("Location: " .$_SESSION['IdPagRis']);
					azzVariabili();
				} else{
					header("Location: paginaRiservata.php");
					azzVariabili();
				}
					
			} else {
				// Autenticazione non riuscita: mostra un messaggio di errore
				$_SESSION['error'] = 'Username o password non validi';
				$flag=1;
				FormHtml();
			}
		} else{
			FormHtml();
		}
		
		
	} else if(isset($_SESSION['IdPagRis'])){
		header("Location: " .$_SESSION['IdPagRis']);
		azzVariabili();
	} else if((isset($_SESSION['nome']) || isset($_POST['Accedi'])) && $flag==0)  {
		header("Location: paginaRiservata.php");
		azzVariabili();
	}?>
