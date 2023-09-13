<?php

//$kites = ['Gin','Gaastra', 'Naish', 'kaas'];
$kites = [
    'gin' => ['size'=>8,'lines'=>4 ],
    'Gaastra' => ['size'=>12,'lines'=>5],
    'Naish' => ['size'=>10,'lines'=>8]
];
foreach ($kites as $kite => $info){
    $lines = $info['lines'];
    $size = $info['size'];
    echo "$kite has lines:$lines size:$size<br>";
}
$names = [
    'Bert' =>  ['age' => 14, 'hobby' => ['gamen', 'slapen'], 'address' => "Winterkoning"],
    'Piet' =>  ['age' => 18, 'hobby' => ['sporten', 'uitgaan'], 'address'=> "Haarlem"],
    'Tim' =>   ['age' => 21, 'hobby' => ['pilsie poppen', 'gamen'], 'address' => "Nergens"],
    'Irene' => ['age' => 19, 'hobby' => ['bordspellen'], 'address' => "Winterkoning"]
];

echo"<br><br><br>";

foreach($names as $name=>$info){
    $age = $info['age'];
    echo "$name ($age) hobbies:  ";
    for($i=0; $i<count($info['hobby']); $i++){
        $hobby = $info['hobby'][$i];
        echo$hobby;
        if($i < count($info['hobby'])-1){
            echo " & ";
        }
    }
    $address = $info['address'];
    echo "  woont: $address<br>";
}






/**
 * Haal de presentatie van een variabele binnen
 */
