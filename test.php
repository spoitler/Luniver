<?php
$password = "romain684157";
$passwordcrypt = hash("sha3-512",$password);
    echo $passwordcrypt;