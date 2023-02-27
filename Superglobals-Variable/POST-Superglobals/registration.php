<?php

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluation using $_POST superglobal</title>
</head>
<body>
    
<main>
    <div id="content">
        <form action="profile.php" method="POST">
                <ul>
                    <li>
                        <input type="text" name="username" placeholder="Username" required>
                        
                    </li>
                    <li>
                        <input type="number" name="userage" placeholder="Your age" required>
                    </li>
                    <li>
                        <button type="submit">Signup</button>
                    </li>
                </ul> 

        </form>
    </div>
</main>


</body>
</html>