<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET') { // check if the request method is GET
  $value = $_GET['a']; // get the value of the "a" parameter
  
  $file = 'data.txt'; // specify the file to store the data
  $current = file_get_contents($file); // get the current content of the file
  $current .= $value . "\n"; // append the value to the file
  
  file_put_contents($file, $current); // write the updated content to the file
}
?>
