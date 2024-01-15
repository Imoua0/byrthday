<?php
    $host="e-srv-lamp.univ-lemans.fr";
    $user="e2302896";
    $database="e2302896";
    $password="Rat132kq";
    $connection=new mysqli($host,$user,$password,$database);
    $TotalGuests= 0;
   

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $Nom=$_POST['name'];
        $Nombre=$_POST['number'];

        $TotalGuests=+'number';
    
        if($connection ->query($sql) == TRUE){
            echo ('$TotalGuests');
        }
        else{
            echo("error: ".$sql."<br>".$connection->error);
        }

    }
    
    ?>
    <p>Total Guests: <?php include 'count_guests.php'; ?></p>