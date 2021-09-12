<?php
    extract($_REQUEST);
    $file=fopen("text.txt","a");
    fwrite($file,"name :");
    fwrite($file, $username ."\n");
    fwrite($file,"Email :");
    fwrite($file, $email ."\n");
    fwrite($file,"Password :");
    fwrite($file, $password ."\n");
    fwrite($file,"Story :");
    fwrite($file, $story ."\n\n");
    fclose($file);
    header("location: index.php");
 ?>
