<?php 

include('config/db_connect.php');

if(isset($_POST['delete'])) {
    $idDelete =  mysqli_real_escape_string($connection, $_POST['id_delete']);

    $sql = "DELETE FROM pokemon WHERE id = $idDelete";

    if(mysqli_query($connection, $sql)) {
        header('Location: index.php');
    } else {
        echo "Error with connection to database: " . mysqli_error($connection);
    }
}

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

<h1 class="title">Details</h1>

<?php if($yourPokemon) { ?>

    <div class="unitContainer">
    <h4 class="unitName"><?php echo htmlspecialchars($yourPokemon['name']);?></h4>
    <p><b>Pokedex entry number: </b><?php echo htmlspecialchars($yourPokemon['id']);?></p>
    <p><b>Type: </b><?php echo htmlspecialchars($yourPokemon['type']);?></p>
    <p><b>Date created: </b><?php echo htmlspecialchars($yourPokemon['time']);?></p>


    <form action="details.php" method="POST">
        <input type="hidden" name="id_delete" value="<?php echo $yourPokemon['id'] ?>">
        <input type="submit" name="delete" value="Delete" class="deleteBtn">
    </form>
    </div>

    <?php } else { ?>

        <h2>No pokemon found with that number!</h2>

        <?php } ?>


<?php include('templates/footer.php') ?>

</html>