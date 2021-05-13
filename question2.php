<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question 2 - KD</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="backgroundImg">
        <div class="box">
            <h1>Tax The Rich</h1>

            <p>
                How much extra money would it bring in for the US? (in millions, no dollar sign)
            </p>

            <form method="POST" action="result.php">
                <textarea type="text" name="answer2" placeholder="format: 200"></textarea><br>
                <input type="submit" value="Show Result"  class="submitButton">
            </form>
        </div>
    </div>
</body>
</html>