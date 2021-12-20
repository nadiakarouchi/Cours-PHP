<?php 
// ma 1ère fonction
function mP() {
    echo "<p> Minute papillon ! </p>";
}


// 2 eme fonction

function wDay() {
    echo "<p> We are  " . date('l') . " my friends ! </p>";
}

function deviseFR() {
    echo "<p>La devise  de la République française est : </p>";

}

// une fonction qui affiche la date au complet

// function dateComplete() {
//     echo "<p> La date :  " . date('r') . " </p>";

// }

function dateComplete() {
   
    setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
    echo strftime("<p>%A %e%B %Y</p>");
}

?>