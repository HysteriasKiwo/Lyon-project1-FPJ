<?php
function effectHazard()
{
    $effects = array("bounce", "flash", "pulse", "rubberBand", "shake", "headShake", "swing", "tada", "wobble", "jello", "bounceIn", "bounceInDown", "bounceInLeft", "bounceInRight", "fadeIn", "fadeInDown", "fadeInDownBig", "fadeInLeft", "fadeInLeftBig", "fadeInRight", "fadeInRightBig", "flipInX", "flipInY", "lightSpeedIn", "rotateIn", "rotateInDownLeft", "rotateInDownRight",  "jackInTheBox", "rollIn", "zoomIn", "zoomInDown", "zoomInLeft", "zoomInRight", "slideInDown", "slideInLeft", "slideInRight",);
    $compteur = count($effects)-1;

    echo "animated " . $effects[rand(0, $compteur)];
}

$nomErreur [1] = "Le  nom est vide";
$nomErreur [2] = "Le format du n° tel n'est pas valide";
$nomErreur [3] = "Le  n° tel est vide";
$nomErreur [4] = "Le format du email n'est pas valide";
$nomErreur [5] = "L'email est vide";
$nomErreur [6] = "Le message est vide";