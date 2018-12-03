<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Select a date: <input type="date" name="calendar"><br>
        Title: <br>
        <input type="text" name="title"><br>
        Subject: <br>
        <textarea cols="100" rows="5" maxlength="500" placeholder="Max 500 characters allowed" name="subject">
        </textarea><br>
        <input type="submit" name="submit" value="Save"><br>
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $date = $_POST['calendar'];
    $filename = "files/data-".$date.".txt";
    $file = fopen($filename, 'a+');
    if (isset($_POST['title']) && isset($_POST['subject'])) { // check if both fields are set
        $txt=$_POST['title']."\n".$_POST['subject'].PHP_EOL;
        fwrite($file, $txt); // Write information to the file
    }
    fclose($file); // Close the file
}

