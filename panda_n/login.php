<!--
//login.php
!-->

<?php

include('database_connection.php');

session_start();


$message = ''; // tu przechowujemy komunikat o bledzie


if(isset($_SESSION['user_id']))
{
	header('location:index.php');
}

if(isset($_POST['login']))
{
	echo("po loginie poszlo");
	$query = "
		SELECT * FROM login 
  		WHERE username = :username
	";
	echo(" tu jeszcze git ");
	$statement = $connect->prepare($query); // zapisanie do zmiennej jesli zapytanie jest prawdziwe 
	echo(" tu tez");
	$statement->execute(
		array(
			':username' => $_POST["username"]
		)
	);	
	echo("juz slabo");
	$count = $statement->rowCount(); // ilosc uzytkownikow
	if($count > 0)
	{
		echo("  jestem w ifie ");
		$result = $statement->fetchAll();
		echo("  hasloooo  ");
		echo($_POST["password"]);
		echo("  a drudiee  ");
		//echo($row["password"]);
		foreach($result as $row)
		{
			if(password_verify($_POST["password"], $row["password"])) // sprawdzamy hasla 
			{
				echo($_POST["password"]);
				$_SESSION['user_id'] = $row['user_id']; // przechowujemy dane o nazwie uzyt 
				$_SESSION['username'] = $row['username']; // i username
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row['user_id']."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
				header('location:index.php');
			}
			else
			{
				$message = '<label>Zły hasło</label>';
			}
		}
	}
	else
	{
		$message = '<label>Zły login</labe>';// nie wylasciwy uzytkownik zaden nie jest w row...
	}
}



?>

<html>  
    <head>  
        <title>Chat </title>  
		<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<h3 align="center">Chat </h3><br />
			<br />
			<div class="panel panel-default">
				<div class="panel-body">
					<p class="text-danger"><?php echo $message; ?></p>
					<form method="post">
						<div class="form-group">
							<label>Nazwa użytkownika:</label>
							<input type="text" name="username" class="form-control" required />
						</div>
						<div class="form-group">
							<label>Hasło:</label>
							<input type="password" name="password" class="form-control" required />
						</div>
						<div class="form-group_logowanie">
							<input type="submit" name="login" class="btn btn-info" value="Zaloguj sie" />
						</div>
						
						
					</form>
					<br />
					<br />
					<br />
					<br />
				</div>
				<div align="center" class= 'r'>
							<a href="register.php">Zarejestruj</a>
						</div>
			</div>
		</div>

	</body> 
	<style>
		body{
	background-color: rgb(178, 185, 185);
		}
		.r{
			background-color: pink;
			height: 80px;
		}
		.panel-default{
			background: #fff;
			width: 400px;
			height: 270px;
			margin: 0 auto; 
			float: right;
			-webkit-box-shadow: 0 0 2px silver; 
    		-moz-box-shadow: 0 0 2px silver; 
    		box-shadow: 0 0 2px silver;
    		
		}
		#username, #password {
    display: block;
    width: 360px; 
    margin: 0 auto;
    padding: 10px 5px;
    border: 1px solid silver;
    outline: 5px solid #ebebeb;
    font-size: 22px;
}
#username:focus, #password:focus {
    outline: 5px solid #e5f2f8;
}
	.form-group_logowanie{

		padding: 7px 250px;
		margin-top: 20px;

	}

	</style> 
</html>