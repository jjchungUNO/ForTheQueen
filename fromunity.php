<?php
    $text1 = $_POST["Name"];
    $text2 = $_POST["JSON"];
    if($text1 != ""){
        echo("Message sent");
        echo("Field 1:" .$text1);
        echo("field2:" .$text2);
        $file = fopen($text1 . ".json","w");
        fwrite($file,$text2);
        fclose($file);
    }
    