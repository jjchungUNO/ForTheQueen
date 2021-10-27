<?php

    $servername = "forthequeen.cnatzalexupe.us-east-2.rds.amazonaws.com";
    $username = "admin";
    $password = "RubberB0mb";
    $dbname= "PlayerDATA";
    $port = "3306";

    $conn = new mysqli($servername,$username,$password,$dbname,$port);

    if($conn->connect_error){
        die("Connection failed" . $conn -> connect_error);
    }
    $text1 = $_POST["ID"];
    $text2 = $_POST["JSON"];
    
        echo("Message sent");
        echo("Field 1:" .$text1);
        echo("field2:" .$text2);
        //$file = fopen($text1 . ".json","w");
        //fwrite($file,$text2);

        //fclose($file);
        $sql = "INSERT INTO Player (PlayerID,PlayerJSON) VALUES ($text1,'$text2')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        $conn -> close();

    
    
?>
    
