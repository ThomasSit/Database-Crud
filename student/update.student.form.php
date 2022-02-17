<?php include "../include/header.php";?>

<body>
<?php include "read.student.php";?>


<div class="container">

    <form action="update.student.php " method="POST">



        <input type="hidden" name="id" value="<?php echo $student["id"]; ?>">

       <?php include "inputs.student.php" ?>

        
    </form>

</div>

</body>
<?php include "../include/footer.php";?>


