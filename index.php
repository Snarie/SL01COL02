<?php

//$kites = [
//    'gin' => ['size'=>8,'lines'=>4 ],
//    'Gaastra' => ['size'=>12,'lines'=>5],
//    'Naish' => ['size'=>10,'lines'=>8]
//];
//foreach ($kites as $kite => $info){
//    $lines = $info['lines'];
//    $size = $info['size'];
//    echo "$kite has lines:$lines size:$size<br>";
//}

$people = [
    //firstname
    'Rowin' => [
        'Surname'   => 'van Gils',
        'DoB'       => '20/05/2004',
        'Age'       => 19,
        'Height'    => 1.73,
        'IsStudent' => true,
        'Grades'    => [
            'Frontend'      => 7.8,
            'Backend'       => 8.0,
            'Vaardigheden'  => 8
        ],
        'FavColors' => [
            'Blue',
            'Purple'
        ],
        'Hobbies'   => [
            'Skating',
            'Gaming',
            'Guitar'
        ],
        'Contact'   => 'rowinvgils@gmail.com',
        'address'   => 'nergens',
    ],

    'Barry' => [
        'Surname'   => 'van den Berg',
        'Dob'       => '18/03/2004',
        'Age'       => 19,
        'Height'    => 1.83,
        'IsStudent' => true,
        'Grades'    => [
            'Frontend'      => 6.0,
            'Backend'       => 8.0,
            'Vaardigheden'  => 1.0
        ],
        'FavColors' => [
            'Aquamarine',
            'Beaver' //de kleur
        ],
        'Hobbies'   => [
            'Gamen',
            'Muziek'
        ],
        'Contact'   => 'barryvdnberg@gmail.com',
        'address'   => 'alkmaar'
    ]
];

//: void, want anders was er een irritante warning
function displayComplexArray($array, $indent = 0): void
{
    foreach ($array as $key => $value) {
        //zorgt voor extra enter tussen basis entries
        if($indent == 0) {echo"<br>";}
        // Add indentation
        echo str_repeat("&nbsp; &nbsp;", $indent);

        if (is_array($value)) {
            // If the value is an array, recursion :P
            echo "$key:<br>";
            displayComplexArray($value, $indent + 1);
        } else {
            // If it's not an array, display as normal
            echo "$key: $value<br>";
        }
    }
}


echo"<br><br>";
//call functie die alle data op scherm gooit
displayComplexArray($people);

//l is weekdag, jS is _th dag van maand, \ voor of omdat o geescaped moet worden
//F is voledig uitgeschreven maand, Y is jaar in xxxx
echo"<br><br>Today is: " . date("l jS \of F Y");


