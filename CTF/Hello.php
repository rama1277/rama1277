<!DOCTYPE html>
<html>
	<head>
		<title>CTF - ExperSec</title>
	</head>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.html">Experience Security</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.html">Inicio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Desafio 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Hello.php">Hello World</a></li>
          <li><a href="Bypass.php">Bypass Panel</a></li>
          <li><a href="Hidden.php">Hidden</a></li>
        </ul>
      </li>
      <li><a href="#">Desafio 2</a></li>
      <li><a href="#">Desafio 3</a></li>
    </ul>
  </div>
</nav>

<?php

    $senha = "expersec{H3LL0_W0RLD}";

    if(isset($_POST["senha"])){
    
        if($_POST["senha"] == $senha){
			echo "<script>alert('Flag Correta')</script>";
        }else{
            echo "<script>alert('Flag Incorreta')</script>";
        }
    }

?>
  
<div class="container">
	<h2><center>Flag para teste</center></h2>	
	<p><b>Flag:</b> ZXhwZXJzZWN7SDNMTDBfVzBSTER9</p>
	<form class="form-signin" action="" method="POST">
	<input type="text" name="senha" id="inputPassword" class="form-control" placeholder="Flag" required="">
	<button class="btn btn-lg btn-outline-primary btn-block" type="submit">Accept</button>
</div>

</body>
</html>

