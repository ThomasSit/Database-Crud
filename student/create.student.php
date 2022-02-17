<?php
include "../templates/connectdb.php";


$voornaam=$_POST['voornaam'];
$achternaam=$_POST['achternaam'];
$email=$_POST['email'];
$telefoonnummer=$_POST['telefoonnummer'];
$straatnaam=$_POST['straatnaam'];
$huisnummer=$_POST['huisnummer'];
$woonplaats=$_POST['woonplaats'];
$postcode=$_POST['postcode'];

$sql = "INSERT INTO student(voornaam, achternaam, email, telefoonnummer, straatnaam, huisnummer, woonplaats, postcode)
                   VALUES (:voornaam, :achternaam, :email, :telefoonnummer, :straatnaam, :huisnummer, :woonplaats, :postcode)";


$stmt=$db-> prepare ($sql);
$stmt->execute ([':voornaam'=>$voornaam,':achternaam'=>$achternaam, ':email'=>$email,':telefoonnummer'=>$telefoonnummer,
    ':straatnaam'=>$straatnaam,':huisnummer'=>$huisnummer,':woonplaats'=>$woonplaats,':postcode'=>$postcode,]);

header(header:"location:students.php");


