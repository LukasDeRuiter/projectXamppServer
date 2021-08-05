<?php

if(isset($_POST['submit'])) {
    //echo htmlspecialchars($_POST['name']);
    //echo htmlspecialchars($_POST['number']);
    //echo htmlspecialchars($_POST['type']);
}

$nameError = "";
$numberError = "";
$typeError = "";

if(empty($_POST['name'])) {
    $nameError = "A name is required!";
} else {
    $nameError = "";
}

if(empty($_POST['number'])) {
    $numberError = "A number is required!";
} else {
    $numberError = "";
}

if(empty($_POST['type'])) {
    $typeError = "A type is required!";
} else {
    $typeError = "";
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<form class="addPokemonForm" method="POST" action="additem.php">
<h2 class="formTitle">Add a new pokedex entry here!</h2>
<label class="formLabel">Name your pokedéx entry:</label>
<input type="text" name="name" class="pokeInputField">
<p class="inputError"><?php echo $nameError ?></p>
<label class="formLabel">Give its number:</label>
<input type="text" name="number" class="pokeInputField">
<p class="inputError"><?php echo $numberError ?></p>
<label class="formLabel">Add type:</label>
<input type="text" name="type" class="pokeInputField">
<p class="inputError"><?php echo $typeError ?></p>
<input type="submit" name="submit" value="submit" class="submitBtn">



</form>


<?php include('templates/footer.php') ?>

</html>