<?php
$handle = fopen("text.txt", "r");

// echo fread($handle, 5);

// echo file ("test.txt");

// print_r(file("test.txt"));

// readfile("test.txt");

echo file_get_contents("test.txt");

