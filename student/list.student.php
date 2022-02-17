

<script>
    /* Wat is die “$”? Het dollarteken “$” is een afkorting voor jQuery. Je mag deze afkorting gebruiken
    in plaats van voluit jquery te schrijven.*/


    function confirmDelete(studentId) {

// Zoek met jquery het form met id “modal-confirm” en open het form

        $("#modal-confirm").modal('show');

// btn-delete-confirmed moet je toevoegen aan de table bij modal title form  zodat het kan confirmen om het te laten verwijderenx
        $('#btn-delete-confirmed').on('click', function(){deleteStudent(studentId);});
    }

    function deleteStudent(studentId) {

        $('#modal-confirm').modal('hide');

        $.get('delete.student.php',

            {id: studentId}).then(

            function() {

                window.location.href = 'index.php';

                window.location.reload(true);});}
</script>

<?php

include "../templates/connectdb.php";

$sql = "SELECT * FROM student";

$sth = $db->prepare($sql);

$sth->execute();

?>

<table class="table">

    <thead>

    <tr>

        <th>Id</th>

        <th>Voornaam</th>

        <th>Achternaam</th>

        <th>Email</th>

        <th>telefoonnummer</th>

        <th>Adres</th>

        <th>Acties</th>

        <th> Verwijder</th>
    </tr>

    </thead>



    <tbody>

    <?php while($row = $sth->fetch()) { ?>

        <tr>

            <td><?php echo $row["id"]; ?></td>

            <td><?php echo $row["voornaam"]; ?></td>

            <td><?php echo $row["achternaam"]; ?></td>

            <td><?php echo $row['email'];?> </td>

            <td><?php echo $row['telefoonnummer'];?> </td>

            <td><?php echo $row["straatnaam"] . " " . $row["huisnummer"] .  " " . $row["postcode"] . " " . $row["woonplaats"];?></td>


            <td><a class="btn btn-primary" href="update.student.form.php?id=<?php echo $row["id"]?>"> Wijzig </a>  </td>

            <td> <button onclick=confirmDelete(<?php echo $row["id"];?>)  class="btn btn-danger">Verwijder</button></td>

        </tr>

    <?php } ?>



    </tbody>

</table>



<div class="modal"  tabindex="-1" role="dialog" id="modal-confirm">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button id="btn-delete-confirmed" onclick="confirmDelete()" class="btn btn-primary">verwijder</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>