<?php 

 if(!isset($_POST["username"]) && !isset($_POST["userage"])) {
        header("Location: registration.php");
        die();
 }

$datas = $_POST;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get value from $_POST method request</title>
</head>
<body>

<main>
    <div id="content">

            <p>
                username: <?= $datas["username"]; ?>
            </p>
            <p>
                Age: <?= $datas["userage"]; ?>
            </p>
    </div>
</main>
    
</body>
</html>