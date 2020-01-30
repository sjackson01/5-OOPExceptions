<?php

/* PHP OOP Exceptions */ 

try {
    $db = new PDO("sqlite:".__DIR__."/database.db");
}catch(Exceptions $e){
    //Assign the exception that we caught to a new variable $e
    //Then use built in exception methods.  
    echo "Unable to Connect: " . $e->getMessage()
        ." in File: " . $e->getFile()
        ." on line " . $e->getLine();
}