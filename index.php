<?php
//ESERCIZIO 1 PHP  
// $array =[0,1,2,3,4,5,6,7,8,9,10];

// foreach($array as $numero){
//     if($numero % 2==0 ){
//         var_dump($numero);
//     };
// };

// ESERCIZIO 2 PHP 
// $users = [
//     ['name' => 'Pippo', 'surname' => 'Pluto', 'gender' => 'M'],
//     ['name' => 'Filomena', 'surname' => 'Teora', 'gender' => 'F'],
//     ['name' => 'Gennaro', 'surname' => 'Vespa', 'gender' => 'M'],
// ];

// foreach ($users as $persone) {
   
       
//         if ($persone["gender"] == "M") {
//             var_dump("Buongiorno Sign. $persone[name] $persone[surname]" );
//         } else {
//             var_dump("Buongiorno Sign.ra $persone[name] $persone[surname] ");
//         }
    
// }

// ESERCZIO N3 PHP 

for($i = 1; $i <= 100; $i++){
    echo $i . "\n";

    if($i %3 == 0 && $i % 5 == 0){
        var_dump("HACKADEMY96");
    } else if ($i % 5 == 0 ){
        var_dump("JAVASCRIPT");
    } else if ( $i % 3 == 0){
        var_dump("PHP");
    } else { 
        var_dump($i);

    }
}
