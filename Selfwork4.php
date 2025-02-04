<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Giulia', 'surname' => 'Rossi', 'gender' => 'F'],
  ['name' => 'Marco', 'surname' => 'Bianchi', 'gender' => 'M']
];

foreach ($users as $user) {
    if ($user['gender'] == 'M') {
       
        echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "\n";
    } elseif ($user['gender'] == 'F') {
       
        echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "\n";
    } else {
        
        echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
    }
}

?>
