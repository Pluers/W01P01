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

?>
<html>
<!-- it is it evening or in the morning change the background color to gray -->

<body <?php if (date("H") <= 12 || date("H") >= 18) echo " style='background-color: gray'"; ?>>
    <h1>
        <?php
        // print all variables
        echo "Voornaam: $voornaam <br>Achternaam: $achternaam <br>Geboortedatum: $geboortedatum <br>Tel: $telefoonnummer <br>leeftijd: $leeftijd <br>plaats: $plaats <br>Rol: $rol <br>Studie: $studie <br>Email: $email <br>$rijbewijs"
        ?>
    </h1>
</body>

</html>