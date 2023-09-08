<?php
//Opdracht 01
//Voorzie alle opdrachten van comments. Als iets niet lukt beschrijf wat niet gelukt is, wat heb je al geprobeerd.
//
//Opdracht 02
//Maak van jou als student minimaal 10 variabele. Waarbij je probeert alle dataypes te gebruiken. Als voorbeeld (name, mobile, email, dob).
//
//Opdracht 03
//Zorg dat alle variabele getoond worden op het scherm. Probeer de getoonde pagina op te maken met html.
//
//Opdracht 04
//Verander met een conditional de kleur van het scherm op basis van het moment van de dag.

$voornaam = "Rick";
$achternaam = "Slierendregt";
$telefoonnummer = 1234567890;
$geboortedatum = "4 sept 2004";
$leeftijd = 19;
$plaats = "Almere";
$rol = "student";
$studie = "AD Software Development";
$email = "mail@mail.com";
$rijbewijs = true;


/*
double/float
string
boolean
integer
array*/

//if($naam){
//    echo 9 % 2;
//} else {
//
//}

//$t = "203827498327";
//for ($i = 0; $i < strlen($t); $i++) {
//    echo $t;
//}

?>
<html>
<body>
<h1>
    <?php
    echo "Voornaam: $voornaam <br>Achternaam: $achternaam <br>Geboortedatum: $geboortedatum <br>Tel: $telefoonnummer <br>leeftijd: $leeftijd <br>plaats: $plaats <br>Rol: $rol <br>Studie: $studie <br>Email: $email <br>$rijbewijs"
    ?>
</h1>
</body>
</html>
