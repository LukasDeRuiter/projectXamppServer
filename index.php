<?php 

$names = array("friends", "amigos", "vrienden", "broskis", "guildbros");
define("NAME", "Lukas");

array_push($names, "compadres");

$amountOfNames = "This site has " . count($names) . " greetings, because I added " . $names[count($names) - 1] . " in the php code";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="firstProject.css">
    <title>First xampp idea</title>
</head>
<body>
    
<h1><?php echo "Hello {$names[rand(0, 4)]}, but this time its inside a " . strtoupper("h") . "1 tag!" ?></h1>
<p><?php echo "My name is " . NAME . " and my name is " . strlen(NAME) . " characters long."?></p><br>
<p><?php echo $amountOfNames ?></p><br>
<p><?php echo "All the greetings are: "?></p>
<ul>
<?php 
for($i = 0; $i < count($names); $i++) {
    echo "<li>{$names[$i]}</li>";
}
?>
</ul>
</body>
</html>

