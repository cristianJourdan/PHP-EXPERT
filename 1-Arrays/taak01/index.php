<?php 

$medewerkers = [
    [
      'voornaam' => 'Willem',
      'achternaam' => 'van Oranje',
      'functie'  => 'koning'
    ],
    [
      'voornaam' => 'Donald',
      'achternaam' => 'Trump',
      'functie'  => 'president'
    ]
  ];
  
echo $medewerkers[0]['voornaam']; // Willem
echo $medewerkers[1]['voornaam']; // Donald
?>