<?php
    $host="e-srv-lamp.univ-lemans.fr";
    $user="e2302896";
    $database="e2302896";
    $password="Rat132kq";
    $connection=new mysqli($host,$user,$password,$database);

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Nom=$_POST['name'];
        $Nombre=$_POST['number'];


        $sql="INSERT INTO `birthday-guests` (Nom, Nombre) VALUES('$Nom','$Nombre')";
    
        if($connection ->query($sql) == TRUE){
            echo (" Cela a bien été envoyé ");
        }
        else{
            echo("error: ".$sql."<br>".$connection->error);
        }

    }
   
    ?>