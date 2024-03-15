<?php

// Array with mixed data types
$items = array(
  "book" => "The Hitchhiker's Guide to the Galaxy", // String (associative key)
  10, // Integer (indexed)
  true, // Boolean (indexed)
  array("red", "green", "blue") // Sub-array (indexed)
);

// Looping through the array
foreach ($items as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

// Accessing elements directly
echo "The first item is: " . $items[0] . "\n"; // String
echo $items["book"]; // String (associative access)

// Checking element existence
if (array_key_exists("book", $items)) {
  echo "The book title is: " . $items["book"] . "\n";
}

// Adding elements
$items[] = "New element"; // Adds to the end
$items["color"] = "purple"; // Adds a new associative key-value pair

// Removing elements
unset($items[1]); // Removes the second element by index
$items = array_values($items); // Renumbers remaining elements

// Slicing an array (extracting a portion)
$sliced = array_slice($items, 1, 2); // Get elements from index 1 (inclusive) to 2 (exclusive)

// Printing the modified array
echo "\nModified array:\n";
print_r($items);
echo "\nSliced array:\n";
print_r($sliced);

?>
