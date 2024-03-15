<?php
$string = "123";
$integer = (int)$string;
echo $integer; // outputs 123

// float
$float = 3.14;
$integer = (int)$float;
echo $integer; // outputs 3

// boolean
$boolean = true;
$integer = (int)$boolean;
echo $integer; // outputs 1

$a = (int) 5.76;
echo $a; // Output: 5

$b = (int) "123abc";
echo $b; // Output: 123

$c = (int) false;
echo $c; // Output: 0

$a = (float) 123;
echo $a; // Output: 123

$b = (float) 0.293123123;
echo $b; // Output: 0.293123123

$c = (float) "10008.99393";
echo $c; // Output: 10008.99393

$d = (float) "hello";
echo $d; // Output: 0


$a = (string) 3;
echo $a; // Output: 3

$b = (string) 3.14;
echo $b; // Output: 3.14

$c = (string) true;
echo $c; // Output: 1

$d = (string) false;
echo $d; // Output: 


$a = 123;
$b = (array) $a;
print_r($b); // Output: Array ( [0] => 123 )

$c = "1,2,3";
$d = (array) $c;
print_r($d); // Output: Array ( [0] => 1,2,3 )

$e = (array) new StdClass();
print_r($e); // Output: Array ( )


// object to cast

$a = (object) "1,2,3";
print_r($a); // Output: stdClass Object ( [0] => 1,2,3 )

$b = (object) array("foo" => "bar");
print_r($b); // Output: stdClass Object ( [foo] => bar )

$c = (object) 123;
print_r($c); // Output: stdClass Object ( [0] => 123 )


// array to iterator
// $array = [1, 2, 3];
// $iterator = (Iterator)$array;
// foreach ($iterator as $value) {
//     echo $value;
// }

// object to array

// $array = [1, 2, 3];
// $iterator = (Iterator)$array;
// foreach ($iterator as $value) {
//     echo $value;
// }

// Resource to Stream: 

// $resource = fopen("file.txt", "r");
// $stream = (stream)$resource;
// echo $stream->read();

