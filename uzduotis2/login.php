<!-- Sukurkite du input laukelius. Vienas -  vardas, kitas - slaptažodis. Susigalvokite vardą ir slaptažodį. Pvz. vardas - "admin",
slaptažodis - "123456". Jei duomenys yra įvesti teisingi, vartotojas nukreipiamas į failą - manopaskyra.php.
Kitu atveju, vartotojas nukreipiamas į puslapį - 404.php. Su $_COOKIES pagalba visi failai, turi prisiminti, ar vartotojas prisijungęs, ar ne. 
manopaskyra.php puslapyje sukurti "Atsijungti" mygtuką, kuris išvalo sausainiukus ir yra matomas tik tada, kai egzistuoja  sausainiukas.

P,S 2 užduotis yra iš 3 paskaitos užduočių sąrašo. Jei atlikote, reikia seną kodą tik patobulinti!!! -->
<?php 
session_start();
$admin = "admin123456";

$user = $_GET["username"];
$pass = $_GET["password"];
$vartotojas = "$user $pass";

$prisijungti = "Truksta Duomenu";
if($admin == $user.$pass)
{
    $prisijungti = header ('location: manopaskyra.php');
    setcookie("prisijunges", 5121,time()+3600);
    
   
   
}
else if($admin != $user.$pass)
{
    $prisijungti = header ('location: page404.php');
} ;

echo "<div> $prisijungti</div>";

?>

