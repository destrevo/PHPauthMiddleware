<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body> <div class="header" >
<h2>Bejelentkezés</h2>
        </div>
   <form class="formClass" method="post" action="index.php">
        <div class="input-group">
        <label>Felhasználónév:<label>
        <input type="text" name="username" placeholder="Írd be a felhasználóneved">
        </div>
    
        <div class="input-group">
        <label>Jelszó:<label>
        <input type="password" name="password">
        </div>
        
        <div class="input-group">
        <Button type="submit" name="login" class="btn">Bejelentkezés</Button>
        </div>
        <p class="Ptag">Nincs még fiókja? <a href="register.php"> Regisztráció</a> <p>
   </form>
</body>
</html>