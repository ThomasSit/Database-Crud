
<?php

$voornaam = "";

if (!empty($student)) {

$voornaam = $student["voornaam"];

}

$achternaam = "";

if (!empty($student)) {

    $achternaam = $student["achternaam"];

}

$email = "";

if (!empty($student)) {

    $email = $student["email"];

}

$telefoonnummer = "";

if (!empty($student)) {

    $telefoonnummer = $student["telefoonnummer"];

}

$straatnaam = "";

if (!empty($student)) {

    $straatnaam = $student["straatnaam"];

}

$huisnummer = "";

if (!empty($student)) {

    $huisnummer = $student["huisnummer"];

}

$postcode = "";

if (!empty($student)) {

    $postcode = $student["postcode"];

}

$woonplaats = "";

if (!empty($student)) {

    $woonplaats = $student["woonplaats"];

}

?>

<div class="form-group">
    <label for="Titel"> voornaam</label>
    <input class="form-control" type="text" id="voornaam" name="voornaam"
           value="<?php echo $voornaam;?>"required>
</div>
          
<div class="form-group">
    <label for="Titel"> achternaam </label>
    <input class="form-control" type="text" id="achternaam" name="achternaam"
           value="<?php echo $achternaam;?>"required>
</div>

<div class="form-group">
    <label for="Titel"> email </label>
    <input class="form-control" type="text" id="email" name="email"
           value="<?php echo $email;?>"required>
</div>

<div class="form-group">
    <label for="Titel"> telefoonnummer </label>
    <input class="form-control" type="text" id="telefoonnummer" name="telefoonnummer"
           value="<?php echo $telefoonnummer;?>"required>
</div>

<div class="form-group">
    <label for="Titel"> straatnaam </label>
    <input class="form-control" type="text" id="straatnaam" name="straatnaam"
           value="<?php echo $straatnaam;?>"required>
</div>

<div class="form-group">
    <label for="Titel"> huisnummer </label>
    <input class="form-control" type="text" id="huisnummer" name="huisnummer"
           value="<?php echo $huisnummer;?>"required>
</div>

<div class="form-group">
    <label for="Titel"> postcode </label>
    <input class="form-control" type="text" id="postcode" name="postcode"
           value="<?php echo $postcode;?>" required>
</div>


<div class="form-group">
    <label for="Titel"> woonplaats </label>
    <input class="form-control" type="text" id="woonplaats" name="woonplaats"
           value="<?php echo $woonplaats;?>" required>
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="toevoegen" >
</div>