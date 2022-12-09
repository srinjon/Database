<?php
$conn="";
$sqlquery='';
if(isset($_POST["submit"]))
{
    $conn=mysqli_connect("localhost","root","");
    if(!$conn)
    {
        die("Connection Failed".mysqli_connect_error());
    }
    $sqlquery="create database ".$_POST["dbname"];
    if(mysqli_query($conn,$sqlquery)){
       echo "database created successfully";
    }
    else{
        echo "Database is already exist".mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database Using PHP Coding</title>
</head>
<body>
    <form method="post">
        <label>Database Name:</label>
        <input type="text" name="dbname" placeholder="Enter a new Database name">
        <input type="submit" name="submit">
    </form>
</body>
</html>