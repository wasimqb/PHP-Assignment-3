<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>File Upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<!--
Write a PHP program that will do the following: 
	Display a webpage with a file upload option
	Upload only CSV files
	Process the file data and display the content as arrays
-->
<body>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
<input type="file" name="file" value="" />
<input type="submit" name="submit" value="Submit" /></form>
</body>
</html>

<?php
if (isset($_POST["submit"])) {
    if (isset($_FILES["file"])) {
        //if there was an error uploading the file
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
        } elseif ($_FILES["file"]["type"] == "text/csv") {
            //if file already exists
            if (file_exists("uploads/" . $_FILES["file"]["name"])) {
                echo $_FILES["file"]["name"] . " already exists. ";
            } else {
                //Store file in directory "uploads"
                $storagename = $_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/" . $storagename);
                echo "Stored in: " . "uploads/" . $storagename . "<br />";
                echo "File uploaded successfully.\n";
                echo "<br />";
                $file = fopen("uploads/".$_FILES["file"]["name"], "r");
                print_r(fgetcsv($file));
                fclose($file);
            }
        } else {
            echo "Not a CSV file";
        }
    } else {
        echo "No file selected <br />";
    }
}
?>