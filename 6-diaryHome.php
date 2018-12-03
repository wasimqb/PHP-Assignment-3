<!DOCTYPE html>
<html>
<head>
<style> 
input[type=submit] {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 16px 32px;
    text-decoration: none;
    margin: 4px 2px;
    cursor: pointer;
    margin-left:40%;
}
input[name="view"]{
    margin-top:1%;
    padding: 16px 38px;
}
input[name="upload"]{
    margin-top:18%;
}
</style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diary Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form action="6-diaryUpload.php" method="post">
    <input type="submit" name="upload" value="Add to Diary">
</form>
<form action="6-diaryView.php" method="post">
    <input type="submit" name="view" value="View Diary">
</form>
</body>
</html>