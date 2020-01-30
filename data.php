<?php
//Turn off error display 
ini_set('display_errors', 'Off');

//Open text file and add contents to $file
//Creates a warning since there is no file 
$file = fopen("data.txt", "r");

//Echo statment still runs since script doesn't stop during warning 
echo "End of FIle";