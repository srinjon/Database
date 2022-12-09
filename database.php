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
    // echo $sqlquery;
    if(mysqli_query($conn,$sqlquery)){
       echo "database created successfully <br>";
       echo "databse name: ", $sqlquery;
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
<?php
$db_user='root';
$db_pass='';
$db_name='testJon';
$db_host='localhost';
$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name);
if($mysqli->connect_errno){
    printf("Connect failed",$mysqli->connect_error);
    exit();
}
$object_table=
"CREATE TABLE IF NOT EXISTS objects(
    ID bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
    post_title text NOT NULL,
    post_content longtext NOT NULL,
    post_name varchar (20) NOT NULL,
    post_date datetime NOT NULL,
    PRIMARY KEY (ID)
    )";
    if($mysqli->query($object_table)===TRUE){
        printf("Table objects successfully created.\n");
    }
?>