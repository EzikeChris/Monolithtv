
<?php
ob_start(); // Turns on output buffering
session_start();

date_default_timezone_set("Africa/Lagos");

try {
    $con = new PDO("mysql:dbname=synergystream;host=localhost", "ezike", "onyeka4life");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    exit("Connection failed: " . $e->getMessage());
}
?>





















<!-- 
/// CREATING DATA BASE CONNECTION TO MYSQL USING XAMPP////

 ///Turns on output buffering


///SETS DEFAULT TIME ZONES///


    
    //code...

    /// catch exceptions onces erros occurs e.g if user adds wrong authentication details
  
    //throw $error if try fails/code;



