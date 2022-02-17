<?php
include "connectdb.php";

//geef de id aan bij de knop submit/delete
$id=$_GET['id'];

$p=array(":id"=>$id);



$sql= "DELETE FROM student WHERE id = :id ";

$sth=$db->prepare($sql);

$sth -> execute($p);

//header("location: students.php");