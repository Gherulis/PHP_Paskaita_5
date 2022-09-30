<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<form method="GET" action="manopaskyra.php">
<?php  
    if(isset($_COOKIE['prisijunges'])) {
        $matomas = "visible";
    }
    else {
        $matomas = "hidden";
    }
     ?>

        <button type="submit" value="logout" name="logout" style='visibility:<?php echo $matomas ?>' id="logOut">Atsijungti</button>
        
    </form>
    <?php  
    if (isset($_GET["logout"])) {
         header( "refresh:0;url=index.php" );
         setcookie("prisijunges", 5121,time()-3600);
        }

?>


</body>
</html>