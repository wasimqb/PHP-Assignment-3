<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Diary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Select a date: <input type="date" name="calendar"><br>
        <input type="submit" name="submit" value="Save"><br>
<form>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
    $date = $_POST['calendar'];
    $filename = "files/data-".$date.".txt";
    $file = fopen($filename, 'r');
    if (!$file){
        perror("fopen");
        exit();
    }
    $contents = file_get_contents($filename);
    if ($contents==false) {
        echo "No records found";
    } else {
        echo "\n The data on the date -".$date."- is ".$contents;
    }
    fclose($file); // Close the file
}
