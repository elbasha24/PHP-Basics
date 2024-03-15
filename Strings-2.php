<?php

$name = "Nasr";
echo "Hello, $name!<br>";
$name2 = $name . " is a good person.";
echo "$name2 <br>";

// String Concatenation
$greeting = 'Hello';
$name1 = 'John';
$message = $greeting . ', ' . $name1 . '! How are you today?';
echo $message;

// Accessing Character in String
$string = "Hello, World!";
$length = strlen($string);
echo $length;
$charAt5 = substr($string, 5, 1);
echo "<br>" . $charAt5;
$uppercase = strtoupper($string);
echo $uppercase;
$lowercase = strtolower($string);
echo $lowercase;
$first_char_uppercase = ucfirst($string);
echo $first_char_uppercase;
$first_char_of_each_word_uppercase = ucwords($string);
echo $first_char_of_each_word_uppercase;
$substring = substr($string, 7, 5);
echo $substring;
$replaced_string = str_replace("World", "PHP", $string);
echo $replaced_string;
$delimiter = " ";
$array_of_strings = explode($delimiter, $string);
print_r($array_of_strings);
$trimmed_string = trim($string);
echo $trimmed_string;

// Custom str_increment
function str_increment($string)
{
    $numbers = [];

    // $numbers = preg_split('/\D/', $string);
    // The line above has been changed to the code below to make preg_split compatible with PHP 5.3 and earlier
    $string = preg_replace('/[^\d]/', ' ', $string);
    $numbers = explode(' ', $string);

    foreach ($numbers as &$number) {
        $number = ++$number;
    }

    return implode('', $numbers);
}

$result = str_increment('123');
echo $result;

?>