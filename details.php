<?php 

include('config/db_connect.php');

if(isset($_GET['id'])) {

    $id = mysqli_real_escape_string($connection, $_GET['id']);

    $sql = "SELECT * FROM pokemon WHERE id = $id";

    $result =  mysqli_query($connection, $sql);

    $yourPokemon = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($connection);

}
?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<h2>Details</h2>

<?php if($yourPokemon) { ?>

    <h4><?php echo htmlspecialchars($yourPokemon['name']);?></h4>
    <p><b>Pokedex entry number: </b><?php echo htmlspecialchars($yourPokemon['id']);?></p>
    <p><b>Type: </b><?php echo htmlspecialchars($yourPokemon['type']);?></p>
    <p><b>Date created: </b><?php echo htmlspecialchars($yourPokemon['time']);?></p>


    <?php } else { ?>

        <h2>No pokemon found with that number!</h2>

        <?php } ?>


<?php include('templates/footer.php') ?>

</html>