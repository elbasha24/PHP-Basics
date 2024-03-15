<?php

$name = "Nasr";
echo "Hello, $name!
";

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
echo $charAt5;
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

if (str_contains($string, "World")) {
    echo "The string contains the word 'World'.
";
} else {
    echo "The string does not contain the word 'World'.
";
}

// str_ends_with(string, suffix) : bool
if (str_ends_with($string, ".php")) {
    echo "It's a PHP file";
} else {
    echo "It's not a PHP file";
}

// str_starts_with(string, prefix) : bool
if (str_starts_with($string, "a.")) {
    echo "It starts with 'a.'";
} else {
    echo "It doesn't start with 'a.'";
}

// str_repeat(string, number) : string
$repeated_string = str_repeat("* ", 4);
echo $repeated_string;

// str_decrement(string) : string
$string = "5";
$decremented_string = str_decrement($string);
echo $decremented_string;

// str_getcsv(string, delimiter, enclosure) : array
$data = ["Apple", "Banana", "Orange"];
$csv = implode(",", $data);
echo $csv;
$lines = str_getcsv($csv, "\n");
print_r($lines);

// str_increment(string) : string
$string = "5";
$incremented_string = str_increment($string);
echo $incremented_string;

// str_limit(string, limit, [end]) : string
$limited_text = str_limit("This is some sample text.", 8);
echo $limited_text;
$limited_text2 = str_limit("This is some sample text.", 10, '---');
echo $limited_text2;

// str_random([length], [characters], [seed]) : string
$random_string = str_random(10);
echo $random_string;

// str_replace(search, replace, subject) : string
$replaced_text = str_replace("World", "Earth", "Hello World!");
echo $replaced_text;

// str_slug(string, [divider], [locale]) : string
setlocale(LC_ALL, 'en_US.utf-8');
// $cleaned_title = str_slug("The quick brown fox jumps over the lazy
// dog");
echo $cleaned_title;

// studly_case(string) : string
// $studly_cased_text = studly_case("this is a title");
// echo $studly_cased_text;

// trim(string, [characters], [mode]) : string
$trimmed_text = trim("     hello world   ");
echo $trimmed_text;


/*

 Sure, here are some additional string functions that are not included in the code you provided:

1. `strpos()`: Finds the position of the first occurrence of a substring within a string.
2. `strrpos()`: Finds the position of the last occurrence of a substring within a string.
3. `substr_count()`: Counts the number of occurrences of a substring within a string.
4. `str_ireplace()`: Replaces multiple occurrences of a substring within a string.
5. `str_split()`: Splits a string into multiple substrings based on a specified separator.
6. `str_word_count()`: Counts the number of words in a string.
7. `str_lexer()`: Tokenizes a string into an array of strings using a specific syntax.
8. `str_regex_replace()`: Replaces multiple occurrences of a regular expression pattern within a string.
9. `str_pad()`: Pads a string with a specified character or string up to a certain length.
10. `str_slice()`: Extracts a portion of a string based on a specified range of characters.

Here's an example of how you could use these functions:
```php
$string = "The quick brown fox jumps over the lazy dog";

// strpos(): Finds the position of the first occurrence of a substring within a string
$pos = strpos($string, "fox");
echo "Position of 'fox': $pos\n";

// strrpos(): Finds the position of the last occurrence of a substring within a string
$pos = strrpos($string, "dog");
echo "Position of 'dog': $pos\n";

// substr_count(): Counts the number of occurrences of a substring within a string
$count = substr_count($string, "the");
echo "Number of occurrences of 'the': $count\n";

// str_ireplace(): Replaces multiple occurrences of a substring within a string
$string = str_ireplace(array("the", "and"), array("a", "&"), $string);
echo "Modified string: $string\n";

// str_split(): Splits a string into multiple substrings based on a specified separator
$parts = str_split($string, " ");
echo "Parts of the string:\n";
foreach ($parts as $part) {
    echo "$part\n";
}

// str_word_count(): Counts the number of words in a string
$wordCount = str_word_count($string);
echo "Number of words in the string: $wordCount\n";

// str_lexer(): Tokenizes a string into an array of strings using a specific syntax
$tokens = str_lexer($string, "/\W+/");
echo "Tokens found in the string:\n";
foreach ($tokens as $token) {
    echo "$token\n";
}

// str_regex_replace(): Replaces multiple occurrences of a regular expression pattern within a string
$pattern = '/[aeiou]/';
$string = preg_replace($pattern, 'X', $string);
echo "Modified string: $string\n";

// str_pad(): Pads a string with a specified character or string up to a certain length
$paddedString = str_pad($string, 20, "=");
echo "Padded string: $paddedString\n";

// str_slice(): Extracts a portion of a string based on a specified range of characters
$slice = str_slice($string, 10, 5);
echo "Sliced string: $slice\n";
```
Note that some of these functions may require additional dependencies or extensions to be installed in your PHP environment. Additionally, some of these functions may have different behavior or syntax than their equivalent functions in other programming languages. It's important to consult the documentation for each function to ensure you understand its usage and limitations.

*/ 