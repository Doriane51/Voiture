<?php

function nbreJours($debut, $fin)
{
    $d = new DateTime($debut);
    $f = new DateTime($fin);
    $diff = $f->diff($d);
    $nbreJours =  $diff->days;
    return $nbreJours;
}



?>
