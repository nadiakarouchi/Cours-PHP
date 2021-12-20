

<?php
echo 
define("PI",3.14159265359);
echo "La constante PI vaut ", PI, "<br><hr>";

 // if pour vérifier l'existence de la constante PI

 if(defined( "PI" ) ) echo "<p class=\"bg-orange\">La constante est bien définie</p><br><hr>";


 define( "validator", "https://validator.w3.org/");

echo "l'url du w3c validator est :". validator ."<br><hr> ";

//utilisation de la constante validator
echo "validez votre HTML CSS sur le site <a href=\" ".validator." \" target=\"_blank\">Validator</a>";

// avant doctyp on met <php definie validator...?>
<!-- //dans header on met validez votre html ... avec le lien  -->

 
