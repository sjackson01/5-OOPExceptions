<?php

/* PHP OOP Exceptions */ 

try {
    $db = new PDO("sqlite:".__DIR__."/database.db");
}catch(Exceptions $e){
    echo "Unable to Connect: " . $e->getMessage()
        ." in File: " . $e->getFile()
        ." on line " . $e->getLine();
}