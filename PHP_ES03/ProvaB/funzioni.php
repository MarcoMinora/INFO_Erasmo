<?php 
session_start();
function FormHtml(){
?>
    <!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
	
    <h1>Login</h1>
	
    <?php if (isset($_SESSION['error'] )): ?>
        <p><?php echo $_SESSION['error'] ; ?></p>
    <?php endif; ?>
    
	<form method="post" action="login.php">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome"><br>
		
        <label for="password">Password:</label>
        <input type="password" name="password" id="password"><br>
		
        <input type="submit" value="Accedi" name="Accedi">
    </form>
	
	
</body>
</html>

<?php 
}

function azzVariabili(){
    $flag = 0;
	$errMsg="";
	$_SESSION['IdPagRis']="";
}
?>


