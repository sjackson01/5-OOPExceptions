<?php
//Turn off error display 
ini_set('display_errors', 'Off');

//Open text file and add contents to $file
//Creates a warning if there is no file and dispaly_errors on  
$file = fopen("data.txt", "r");

//Echo statement still runs since script do not stop during warnings 
echo "End of FIle";