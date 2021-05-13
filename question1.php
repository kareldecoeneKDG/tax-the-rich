<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 1 - KD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="backgroundImg">
        <div class="box">
            <h1>Tax The Rich</h1>

            <p>
                Do you think it is fair to the rich?
            </p>

            <form method="POST" action="question2.php">
                <textarea type="text" name="answer1" placeholder="your answer here..."></textarea><br>
                <input type="submit" value="Next" class="submitButton">
            </form>
        </div>
    </div>
</body>
</html>