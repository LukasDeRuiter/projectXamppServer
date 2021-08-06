<?php

include('config/db_connect.php');

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