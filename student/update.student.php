<?php

include "update.student.form.php";

$voornaam=$_POST["voornaam"];
$achternaam=$_POST["achternaam"];
$email=$_POST['email'];
$telefoonnummer=$_POST['telefoonnummer'];
$straatnaam=$_POST["straatnaam"];
$huisnummer=$_POST["huisnummer"];
$postcode=$_POST["postcode"];
$woonplaats=$_POST["woonplaats"];

$id=$_POST["id"];



$sql= "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam, email = :email, telefoonnummer= :telefoonnummer,straatnaam = :straatnaam,
                   huisnummer = :huisnummer, postcode= :postcode, woonplaats = :woonplaats
WHERE id = :id ";

$sth= $db->prepare($sql);

$sth->execute([':voornaam'=>$voornaam,':achternaam'=>$achternaam,':email'=>$email,':telefoonnummer'=>$telefoonnummer,':id'=>$id, ':straatnaam'=>$straatnaam,
    ':huisnummer'=>$huisnummer, ':postcode' => $postcode,'woonplaats'=>$woonplaats]);


header(header:"location:students.php");

?>