<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Basic Login System</title>
</head>
<body>
    <div class="header">
    <h2>Regisztráció</h2>
        </div>
   <form class="formClass" method="post" action="register.php">
       <?php include('errors.php'); ?>
        <div class="input-group">
        <label>Felhasználónév:<label>
        <input type="text" name="username" placeholder="adj egy felhasználónevet">
        </div>
        <div class="input-group">
        <label>Email:<label>
        <input type="text" name="email">
        </div>
        <div class="input-group">
        <label>Jelszó:<label>
        <input type="password" name="password">
        </div>
        <div class="input-group">
        <label>Jelszó mégegyszer:<label>
        <input type="password" name="password2">
        </div>
        <div class="input-group">
        <Button type="submit" name="register" class="btn">Regisztáció</Button>
        </div>
        <p class="Ptag">Van fiókja? <a href="login.php"> Bejelentkezés</a> <p>
   </form>
</body>
</html>