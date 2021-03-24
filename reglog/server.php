<?php
session_start();

// vizsgálati változók kitöltéshez
$username = "";
$email= "";
$errors = array ();

// kapcsolódás szervezhez
$db = mysqli_connect('localhost','root','','registration');
//"register" gombra kattintáskor "POST" methoddal --(?$db bedobása)--
if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
    $email = mysqli_real_escape_string($db,$_POST['email']);
    $password = mysqli_real_escape_string($db,$_POST['password']);
    $password2 = mysqli_real_escape_string($db,$_POST['password2']);

    //Kitöltési vizsgálat
    if(empty($username)){
        array_push($errors,"Felhasználónév szükséges"); 
    }
    if(empty($email)){
        array_push($errors,"Email szükséges"); 
    }
    if(empty($password)){
        array_push($errors,"Jelszó szükséges"); 
    }
    if($password != $password2){
        array_push($errors,"A két kelszó nem egyezik"); 
    }
    // Sql update, ha nincs error, (És meg is történik)
    if(count($errors)===0){
        $password = md5($password);
        $sql = "INSERT INTO users (username, email, password) 
        VALUES('$username','$email', '$password') ";
        mysqli_query($db,$sql);
       
    }
}
//belépés login felületről, kód visszakonvertálás
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($db,$_POST['username']);
   
    $password = mysqli_real_escape_string($db,$_POST['password']);
    
    if(empty($username)){
        array_push($errors,"Felhasználónév szükséges"); 
    }
    if(empty($password)){
        array_push($errors,"Jelszó szükséges"); 
         }
    if(count($errors)===0){
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username = '$username' AND password='$password'";
        $result = mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['username'] = $username;;
            $_SESSION['success']= "Sikeres belépés";
            header('location: index.php'); //visszatérés kezdőoldalra
        } else{
            array_push($errors, "something went wrong");
            header('location: login.php');
        }
    } 
     }
//logout 
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header ('location: login.php');
};
?>