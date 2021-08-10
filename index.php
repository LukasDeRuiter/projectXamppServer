<?php 

$names = array("friends", "amigos", "vrienden", "broskis", "guildbros");
define("NAME", "Lukas");

array_push($names, "compadres");

$amountOfNames = "This site has " . count($names) . " greetings, because I added " . $names[count($names) - 1] . " in the php code";

function squareNumber($number) {

    return pow($number, 2);
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php');?>
    
<h1 class="title"><?php echo "Hello {$names[rand(0, 4)]}, but this time its inside a " . strtoupper("h") . "1 tag!" ?></h1>

<div class="textBlock">
<p><?php echo "My name is " . NAME . " and my name is " . strlen(NAME) . " characters long."?></p><br>
<p>I am 27 years old. Did you know that 27 squared is <?php echo squareNumber(27) ?>?</p>
<p><?php echo $amountOfNames ?></p><br>
<p><?php echo "All the greetings are: "?></p>
<ul>
<?php 
for($i = 0; $i < count($names); $i++) {
    echo "<li>{$names[$i]}</li>";
}
?>
</ul>
<p>Also, welcome to my pokedex project! Here you can check the pokedex and add more pokemon, which are stored in a mysql database!</p>
</div>
 
<?php include('templates/footer.php');?>

</html>

