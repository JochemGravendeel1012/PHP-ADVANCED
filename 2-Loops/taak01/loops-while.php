<?php
$leeftijd = 0;

while ($leeftijd <= 17) {
    echo " <ul> Ik ben $leeftijd, dus ik mag nog niet stemmen. </ul>";
    $leeftijd++;
}

if ($leeftijd >= 18) {
    echo " <ul> Ik ben $leeftijd, dus ik heb stemrecht. </ul>";
}