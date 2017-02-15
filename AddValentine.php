<?php

$link = mysqli_connect("localhost", "root", "root", "Valentines");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sender = mysqli_real_escape_string($link, $_GET['sender']);
$recipient = mysqli_real_escape_string($link, $_GET['recipient']);
$joke = mysqli_real_escape_string($link, $_GET['joke']);

$sql = "INSERT INTO valentines (sender, recipient, joke) VALUES ('$sender', '$recipient', '$joke')";

if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

mysqli_close($link);

?>