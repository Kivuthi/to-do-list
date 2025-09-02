<?php
// Write to a file
$file = fopen("message.txt", "a");  // "a" = append mode
fwrite($file, $msg . "\n");
fclose($file);

// Read the file
$file = fopen("message.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>
