<?php 

$names = array("friends", "amigos", "vrienden", "broskis", "guildbros");
define("NAME", "Lukas");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First xampp idea</title>
</head>
<body>
    
<h1><?php echo "Hello {$names[rand(0, 4)]}, but this time its inside a h1 tag!" ?></h1>
<p><?php echo "My name is " . NAME ?></p>

</body>
</html>

