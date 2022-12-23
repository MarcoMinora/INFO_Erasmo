<!--pagina riservata-->
<?php 
	// Avvia la sessione
	session_start();
	// Verifica se l'utente è già autenticato
	
	if (isset($_SESSION['nome'])) {	
	
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pagina riservata 2</title>
</head>
<body>
    <h1>Pagina riservata 2</h1>
    <p>Benvenuto, <?php echo $_SESSION['nome']; ?>!</p>
    <!--logout pagina-->
	<h4><a href="logout.php">logout</a></h4>
	<h4><a href="index.php">index</a></h4>	
</body>
</html>

<?php 
	} else{
		$url = 'login.php?error=Effettuare_prima_il_login&idPagRis=paginaRiservata2.php&from=';                    
		$url .= basename($_SERVER['PHP_SELF']);                              
		header("Location: $url");
	}
?>
