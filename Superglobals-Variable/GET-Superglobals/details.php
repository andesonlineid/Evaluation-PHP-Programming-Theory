<?php 

if(!isset($_GET["name"]) && !isset($_GET["age"])) {
    header("Location: index.php");
    die();
}

    $username = $_GET["name"];
    $userAge = $_GET["age"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get value using $_GET superglobals</title>
</head>
<body>

    <main>
        <div id="content">
        <!-- You can see these value inside the url / address bar -->
                <p>
                    Username = <?= $username ?> <br>
                    Age = <?= $userAge ?>
                </p>

        </div>
    </main>
    
</body>
</html>