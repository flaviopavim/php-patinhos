<?php
for ($patinhos=5;$patinhos>=1;$patinhos--) {
    echo $patinhos.' patinho'.($patinhos==1?'':'s').' ';
    echo 'fo'.($patinhos==1?'i':'ram').' passear';
    echo '<br>';
    echo 'além das montanhas para brincar';
    echo '<br>';
    echo 'a mamãe gritou:';
    echo '<br>';
    for ($x=1;$x<=4;$x++) {
        echo 'qua ';
    }
    echo '<br>';
    $restante=$patinhos-1;
    echo 'mas '.($restante==0?'nenhum':'só').($restante==0?'':' '.$restante).' ';
    echo 'patinho'.($restante<=1?'':'s').' ';
    echo 'volt'.($restante<=1?'ou':'aram').' de lá';
    echo '<br>';
    echo '<br>';
}
