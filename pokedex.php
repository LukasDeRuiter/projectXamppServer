<?php

$connection = mysqli_connect('localhost', 'lukasderuiter', 'replaced', 'project_pokedex');

if(!$connection) {
    echo "error: " . mysqli_connect_error();
}

$sql = "SELECT * FROM pokemon";

$result = mysqli_query($connection, $sql);

$fullPokedex = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<?php echo "Amount of pokemon added: " . count($fullPokedex) ?>

<div class="pokedexContainer">
    <?php foreach($fullPokedex as $pokemon):  ?>
        <div class="pokedexUnit">
            <h6><?php echo htmlspecialchars($pokemon['name']);?></h6>
            <p><?php echo htmlspecialchars($pokemon['id']);?></p>

            <ul>
                <?php foreach(explode(',', $pokemon['type']) as $type): ?>
                    <li><?php echo $type ?></li>
                    
                    <?php endforeach; ?>
                </ul>
                
                <p><?php echo htmlspecialchars($pokemon['time']);?></p>
            </div>
            <?php endforeach; ?>
        </div>

<?php include('templates/footer.php') ?>

</html>