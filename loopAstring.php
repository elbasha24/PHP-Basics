<?php
$myString = 'Hello, World!';

for ($i = 0; $i < strlen($myString); $i++) {
    echo $myString[$i] . PHP_EOL;
}

echo PHP_EOL;

$str_length = strlen($myString);
for ($i = 0; $i < $str_length; $i++) {
    foreach(str_split($myString) as $char) {
        echo $char . PHP_EOL;
        break;
    }
}