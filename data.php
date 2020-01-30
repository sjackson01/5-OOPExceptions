<?php
//Display only fatal errors
error_reporting(1);

//Open text file and add contents to $file
//Creates a warning if there is no file and dispaly_errors on  
try{
if(!$file = fopen("data.txt", "r")){
    //Display errors is turned off so we dont see the error below 
    //We stil recieve a fatal error that stops the script
    throw new Exception('Unable to access file');
    }
    //Exectpion handling shows error and allows script to continue
} catch (Exception $e){
    echo $e->getMessage();
}

//Echo statement still runs since script do not stop during warnings 
echo "End of FIle";