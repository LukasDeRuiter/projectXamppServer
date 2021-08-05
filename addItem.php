<?php

$nameError = "";
$numberError = "";
$typeError = "";

$name = "";
$number= "";
$type = "";

if(isset($_POST['submit'])) {
    //echo htmlspecialchars($_POST['name']);
    //echo htmlspecialchars($_POST['number']);
    //echo htmlspecialchars($_POST['type']);
    
    if(empty($_POST['name'])) {
        $nameError = "A name is required!";
    } else {
        $nameError = "";
        $name = $_POST['name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $name)) {
            $nameError = "Please enter a name using only lowercase and uppercase letters!";
            $name = "";
        }
    }

    if(empty($_POST['number'])) {
        $numberError = "A number is required!";
    } else {
        $numberError = "";
        $number = $_POST['number'];
        if(!filter_var($number, FILTER_VALIDATE_INT)) {
            $numberError = "Please enter a number!";
            $number= "";
    }
}
    
    if(empty($_POST['type'])) {
        $typeError = "A type is required!";
    } else {
        $typeError = "";
        $type = $_POST['type'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $type)) {
            $typeError = "Please enter a type using only lowercase and uppercase letters!";
            $type = "";
        }
    }

    if($nameError == "" && $numberError == "" && $typeError == "") {
        header('Location: index.php');
    } else{
        echo "Form is not filled in correctly!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php') ?>

<form class="addPokemonForm" method="POST" action="additem.php">
<h2 class="formTitle">Add a new pokedex entry here!</h2>
<label class="formLabel">Name your pokedéx entry:</label>
<input type="text" name="name" class="pokeInputField" value="<?php echo htmlspecialchars($name) ?>">
<p class="inputError"><?php echo $nameError ?></p>
<label class="formLabel">Give its number:</label>
<input type="text" name="number" class="pokeInputField" value="<?php echo htmlspecialchars($number) ?>">
<p class="inputError"><?php echo $numberError ?></p>
<label class="formLabel">Add type:</label>
<input type="text" name="type" class="pokeInputField" value="<?php echo htmlspecialchars($type) ?>">
<p class="inputError"><?php echo $typeError ?></p>
<input type="submit" name="submit" value="submit" class="submitBtn">



</form>


<?php include('templates/footer.php') ?>

</html>