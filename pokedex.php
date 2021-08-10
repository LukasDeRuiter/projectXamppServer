<?php

include('config/db_connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<h1 class="title">Pokedex</h1>

<div class="pokedexContainer">
    <?php foreach($fullPokedex as $pokemon):  ?>
        <div class="pokedexUnit">
            <h6 class="name"><?php echo htmlspecialchars($pokemon['name']);?></h6>
            <p class="idText"><?php echo "Index nr: " . htmlspecialchars($pokemon['id']);?></p>

            <ul>
                <?php foreach(explode(',', $pokemon['type']) as $type): ?>
                    <li class="type"><?php echo $type ?></li>
                    
                    <?php endforeach; ?>
                </ul>
                
                <a href="details.php?id=<?php echo $pokemon['id']?>" class="pokedexLink">
                <svg width="100" height="100" viewBox="0 0 210 297" version="1.1" id="svg5" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" class="pokeballsvg">
                <defs id="defs2" />
                <g id="layer1">
                    <circle style="fill:#000000;fill-rule:evenodd;stroke-width:0.264583" id="path32" r="100" cy="121.1917" cx="103.70012" /></g>
                    <g id="layer2">
                        <path style="fill:#ff0000;fill-rule:evenodd;stroke-width:0.264583" id="path32-1" d="M 9.2365367,119.15908 A 95,95 0 0 1 104.4002,24.58547 a 95,95 0 0 1 94.83533,94.90285" />
                        <path style="fill:#f9f9f9;fill-rule:evenodd;stroke-width:0.264583" id="path32-1-7" d="M 199.01188,116.71737 A 95,95 0 0 1 153.76841,204.29088 95,95 0 0 1 55.198646,204.59236 95,95 0 0 1 9.4203347,117.29725" />
                        <rect style="fill:#000000;stroke-width:0.264583" id="rect58" width="193.69626" height="10.14145" x="7.2785077" y="115.15542" ry="0" />
                        <ellipse style="fill:#ffffff;fill-opacity:1;stroke:#000000;stroke-opacity:1;stroke-width:5.5;stroke-miterlimit:4;stroke-dasharray:none" id="path196" cx="105.04356" cy="121.29131" rx="24.182692" ry="20.782001" />
                    </g>
                    <text x="10" y="250" class="pokeballText">More Info</text>
                </svg>
            
            </a>

            <p><?php echo "Added to pokedex on: " . htmlspecialchars($pokemon['time']);?></p>

            </div>
            <?php endforeach; ?>
        </div>
        
        <h3 class="pokedexCounter"><?php echo "Amount of pokemon added: " . count($fullPokedex) ?></h3>

<?php include('templates/footer.php') ?>

</html>