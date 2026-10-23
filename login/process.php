<!Doctype html>
<html lang ="en">
<head>
    <meta charset="utf-8">  
</head>

<body>

<?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == 'Lim Shien Nee' && $password == '106715928'){
        $_SESSION['user'] = $username;
        header('Location:welcome.php');
        exit();
        }
        else{
    echo "Invalid login.<a href = 'login.php'>Try again</a>";        
    }

?>