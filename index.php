<?php


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
            'Beaver' //de kleur niet het dier
        ],
        'Hobbies'   => [
            'Gamen',
            'Muziek'
        ],
        'Contact'   => 'barryvdnberg@gmail.com',
        'address'   => 'alkmaar'
    ]
];

//: void, to prevent weird error message in phpstorm
function displayComplexArray($array, $indent = 0): void
{
    foreach ($array as $key => $value) {
        //extra break, because why not
        if($indent == 0) {echo"<br>";}
        //indentation for display
        echo str_repeat("&nbsp; &nbsp;", $indent);

        if (is_array($value)) {
            // if the value is an array, recursion :P
            echo "$key:<br>";
            displayComplexArray($value, $indent + 1);
        } else {
            // if it's not an array, display as normal
            echo "$key: $value<br>";
        }
    }
}


echo"<br><br>";
//call function to display array
displayComplexArray($people);

//l is weekday, jS is _th day of month, \ to escape o in of
//F is month long, Y is year in xxxx
echo"<br><br>Today is: " . date("l jS \of F Y");


