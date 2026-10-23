<!Doctype html>
<html lang ="en">
<head>
    <meta charset="utf-8">  
    <title> Welcome </title>
</head>

<body>

<?php 
    session_start();

   
    if (isset($_SESSION['user'])){
        include 'header.inc'; 

        echo "<h2>Welcome,". $_SESSION['user']."</h2>";
        echo "<hr>";

        include 'footer.inc';
    }
    
    else {
        header("Location:login.php");
        exit();
    }

    
?>
</body>
</html>