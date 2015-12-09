<?php
header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes" ?>';

echo '<response>';
    $team = $_GET['team'];
    $teamsArray = array('fnatic','Team Solomid','EnVyUs','Luminosity Gaming','Cloud9.CS','Invictus Gaming','SKT T1','Edward Gaming','Origen','ahq e-Sports Club','Team Secret','Cloud9','Team Liquid','Fnatic','Digital Chaos');
    if(in_array($team,$teamsArray))
        echo 'The team '.$team.' are competing';
    elseif($team=='')
        echo 'Please enter a team name';
    else
        echo 'Sorry, '.$team.' are not competing';
echo '</response>';
?>