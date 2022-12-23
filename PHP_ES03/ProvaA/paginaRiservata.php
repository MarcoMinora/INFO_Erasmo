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
    <title>Pagina riservata</title>
</head>
<body>
    <h1>Pagina riservata</h1>
    <p>Benvenuto, <?php echo $_SESSION['nome']; ?>!</p>
    <!--logout pagina-->
	<h4><a href="logout.php">logout</a></h4>
	<h4><a href="index.php">index</a></h4>	
</body>
</html>

<?php 
	} else{
	echo '<h4>Impossibile accedere alla pagina riservata, effettuare il login!</h4>';
	echo '<h4><a href="login.php">pagina di login</a></h4>';
	}
?>
