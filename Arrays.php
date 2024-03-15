<?php
$fruits = array('apple', 'banana', 'orange');
// loop the array
foreach ($fruits as $value) {
    echo "I have a fruit called $value\n";  // output: I have a fruit called apple   . I have a fruit called banana. I
}

$nums = array(1, 2, 3);
echo "The first number is $nums[0]\n";  // output: The first number is 1

echo count($fruits) . " types of fruits are in this list.\n";

foreach ($nums as $key => $value) {
    echo "Number $value is at index $key
";
}

if (in_array("orange", $fruits)) {
    echo "Orange is in the list!\n";
}

$customer = array("name" => "John Doe", "email" => "johndoe@example.com");
echo $customer["email"]; // This will output "johndoe@example.com"

$data = array(
    "id" => 123,
    "title" => "My Document",
    "tags" => array("php", "programming")
  );
  echo $data["tags"][0]; // This will output "php"
// Short Array Syntax (alternative to array()):

$colors = ["red", "green", "blue"];
echo $colors[1]; // This will output "green"

// 6. Creating an Empty Array:

$empty_array = array();
// OR
$empty_array = [];


$mixed_array = array(true, "hello", 3.14);
echo $mixed_array[1]; // This will output "hello"
// 8. Accessing Non-existent Key:
$products = array("A" => "Laptop", "B" => "Phone");
echo $products["C"]; // This will output an empty value or error depending on configuration

// 9. Looping through an Array:
$countries = array("France", "Italy", "Germany");
foreach ($countries as $country) {
  echo $country . " ";
}
// 10. Multidimensional Array:

$employees = array(
    array("name" => "Alice", "department" => "Marketing"),
    array("name" => "Bob", "department" => "Engineering")
  );
  echo $employees[0]["name"]; // This will output "Alice"
  
// Short Array Syntax

$colors = ["red", "green", "blue"];
echo count($colors); // Output: 3 (counting the number of elements)


// Associative Array with String Keys:
$person = array(
    "name" => "John Doe",
    "age" => 30,
    "city" => "New York"
  );
  echo $person["name"]; // Output: John Doe (accessing by key)

  
//   Associative Array with Mixed Keys:

$data = array(
    1 => "value1",
    "key2" => "value2",
    3.14 => "pi" // Keys can be integers, floats, or strings
  );
  echo $data[1]; // Output: value1

  
// Array with Empty Values:

$numbers = array(1, , 3); // Empty values are allowed and have their own indexes
echo isset($numbers[1]); // Output: false (checking if index 1 exists)


// Multidimensional Array:
$employees = array(
    array("name" => "Alice", "department" => "Marketing"),
    array("name" => "Bob", "department" => "Engineering")
  );
  echo $employees[0]["name"]; // Output: Alice (accessing elements within a sub-array)

// Merging Arrays:

$arr1 = array(1, 2, 3);
$arr2 = array("a", "b", "c");
$merged = array_merge($arr1, $arr2);
print_r($merged); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => a [4] => b [5] => c )


//  Looping through an Array:

$products = array("laptop", "phone", "watch");
foreach ($products as $product) {
  echo $product . " "; // Output: laptop phone watch
}


// Accessing the Last Element:

$animals = array("cat", "dog", "bird");
$last_element = end($animals);
echo $last_element; // Output: bird


// Checking for Array Existence:

    $maybe_array = "not an array";
    if (is_array($maybe_array)) {
      echo "It's an array!";
    } else {
      echo "Not an array."; // Output: Not an array.
    }
$definitely_an_array = array();
if (isset($definitely_an_array)) {
    echo "Array exists."; // Output: Array exists.
} else {
    echo "Array does not exist."; // Output: Array does not exist.
}
// Creating an Array from Another Array:
$original = array("a", "b", "c");
$copy = array_slice($original, 0); // Copies all elements from original
echo $copy[0]; // Output: a (accessing the first element in the copy)

// Adding Elements to an Array:

$tasks = ["clean room", "wash dishes"];
array_push($tasks, "go for a walk"); // Adds "go for a walk" to the end
echo $tasks[2]; // Output: go for a walk


// 8. Removing Elements from an Array:
$shoppingCart = ["bread", "milk", "eggs"];
unset($shoppingCart[1]); // Removes "milk" by index
$shoppingCart = array_values($shoppingCart); // Renumbers remaining elements
echo $shoppingCart[0]; // Output: bread (now the first element)


//  Looping through an Array:

$students = array("Alice", "Bob", "Charlie");
foreach ($students as $student) {
  echo $student . " "; // Output: Alice Bob Charlie
}


// Multidimensional Array:

$schedule = array(
    "Monday" => array("math", "physics"),
    "Tuesday" => array("English", "history")
  );
  echo $schedule["Monday"][0]; // Output: math (accessing element in a sub-array)

  
  
