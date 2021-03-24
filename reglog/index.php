<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title></title>
</head>
<body>
   <?php if(empty($_SESSION['username'])){
header('location: login.php ');
    } ?>
<div class="main" >
<h2>Kezdőoldal</h2>

    </div>
    <?php if(isset($_SESSION["username"])): ?>
        <p>Üdvözöllek <strong><?php echo $_SESSION['username']; ?> </strong></p>
    <?php endif ?> 
    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
        Itt csak bejelentkezéssel jelenik meg az adat.
        <p><a href="index.php?logout='1'">Kijelentkezés</a></p>
        <?php endif ?> 

    </div>

</body>
</html>