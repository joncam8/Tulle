<?php

    $con = mysqli_connect('localhost', 'root', '', 'useraccounts');
    
    if(!$con)
    {
        die(' Please Check YOur Database Connection' .mysqli_error());
    }

?>