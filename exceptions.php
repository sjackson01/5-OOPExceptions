<?php
ini_set('display_errors', 'Off');

/**
  * Custom set_error_handler function. Will show following params.
  * Will produce fatal error if exception not caught. 
  * @param int level of error raised. 
  * @param string contains the error message.
  * @param string (optional) file name in which error raised. 
  * @param int (optional) the line number where error raised.
  * @param array (optional) every variable within the scope 
  * the error was triggered.    
  */

function exception_error_handler($severity, $message, $file, $line){
    //Create a new exception and pass details of the error
    //0 is your own error code optional parameter int 
    throw new ErrorException($message, 0, $severity, $file, $line );
}

/**
  * Use set_error_handler to define 
  * function for handling errors.
  * @param string pass in name of 
  * function we want to use. 
  */
set_error_handler("exception_error_handler");

/**
  * Custom default set_exception_handler function
  * for default uncaught exception behavior. Does
  * not allow the script to continue processing 
  * @param object exception object   
  */

function exception_handler($e){
    echo "Uncaught exception: " . $e->getMessage();
}

/**
  * Use set_exception_handler to create
  * default error handler funciton.  
  * function for handling errors.
  * @param string pass in name of 
  * function we want to use. 
  */

set_exception_handler("exception_handler");

//Call function without parameter
//Will produce warning
try{
    strpos();
    }catch (Exception $e){
        echo "ERROR ! " . $e->getMessage();
}

echo 10/0;

//Output ERROR ! strpos() expects at least 2 parameters, 0 givenEnd of file

echo "End of file";