<?php
//Display only fatal errors
error_reporting(1);

class myData
{
        function getData()
        {
            if(!$file = fopen("data.txt", "r")){
                throw new Exception('Unable to access file');
        }
    }
}

$data = new myData();

try{
    $data->getData();
} catch (Exception $e){
    echo $e->getMessage();
}

//Echo statement still runs since script do not stop during warnings 
echo "End of FIle";