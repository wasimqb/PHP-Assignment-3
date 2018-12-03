<?php
/*
Display a webpage with 5 names. John, Doe, Alex, Megan, and Roy. 
Each of these names should be clickable and should take the user to a page 
where details of each user mentioned above are displayed. 
I should have a separate page which shows the number of times each name was clicked.
*/
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center; 
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .users{
            margin-left:42%;
            margin-top:13%;
        }
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Users Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="users">
    <form action="7-userDetails.php" method="post">
        <input class="button" type="submit" name="name" value="John" />
    </form>
    <form action="7-userDetails.php" method="post">
        <input class="button" type="submit" name="name" value="Doe" />
    </form>
    <form action="7-userDetails.php" method="post">
        <input class="button" type="submit" name="name" value="Alex" />
    </form>
    <form action="7-userDetails.php" method="post">
        <input class="button" type="submit" name="name" value="Megan" />
    </form>
    <form action="7-userDetails.php" method="post">
        <input class="button" type="submit" name="name" value="Roy" />
    </form>

    <a href="7-clickCount.php">Click Count</a>
</div>
</body>
</html>

