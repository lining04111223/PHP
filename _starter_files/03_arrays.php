<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

$numbers =[1,44,55,22];
$fruits = array("apple","orange","pear");
//echo $numbers[0];
//print_r($numbers);



// Array of people
$people = [
  $person1, //   [...$person1]
  [
    'first_name' => 'John',
    'last_name' => 'Doe',
    'email' => 'john@gmail.com',
  ],
  [
    'first_name' => 'Jane',
    'last_name' => 'Doe',
    'email' => 'jane@gmail.com',
  ],
];

//var_dump($people);

// Accessing values in a multi-dimensional array
echo $people[0]['first_name'];
echo $people[2]['email'];

var_dump(json_encode($people));