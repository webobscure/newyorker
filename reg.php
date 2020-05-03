<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<title>Зарегистрироваться</title>
</head>
<body>
<?php
require ('db.php');

if (isset($_POST['login']) && isset($_POST['password']) && isset($_POST['FIO'])) {
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['FIO'];


$query = "INSERT INTO users (login, password, FIO) VALUES ('$login','$password','$name')";
$result = mysqli_query($connection, $query);

if($result) {
$smsg = " Успешно";
} else {
$fsmsg = "Неправильно";
}
}
?>
<div class="container" style="background:#0faabe;">
<div class="header text-center"style="background:#0faabe;">
<h2>Создать аккаунт</h2>
</div>
<form id="form" class="form" method="POST" >
<?php if(isset($smsg)) {?><div class="alert alert-success" role="alert"> <?php echo $smsg ?></div><?php } ?>
<?php if(isset($fsmsg)) {?><div class="alert alert-danger" role="alert"> <?php echo $fsmsg ?></div><?php } ?>
<div class="form-group">
<label for="login">Username</label>
<input type="text" class="form-control" name="login" placeholder="medusa" id="login" required/>
</div>

<div class="form-group">
<label for="name">Name</label>
<input type="text" class="form-control" name="FIO" placeholder="Misha" id="name" required />
</div>
<div class="form-group">
<label for="password">Password</label>
<input type="password" class="form-control" name="password" placeholder="Password" id="password" required/>
</div>
<div class="form-group">
<button class="btn btn-primary" type="submit" style="margin-left:90px;">Создать</button>
<a href="login.php" class="btn btn-lg btn-primary btn-block">Войти</a>
</div>


</form>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>