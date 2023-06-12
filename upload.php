<?php
require 'connection.php';
if(isset($_POST['userName']) && isset($_FILES['profileImage'])){
    $userName = $_POST['userName'];
    $uploadedImage = $_FILES['profileImage']['name'];
    $filePath = 'imgStorage/'.$uploadedImage;
    move_uploaded_file($_FILES['profileImage']['tmp_name'],$filePath);
    $app['db'] = (new Database())->db;
    $ins = $app['db']->query("INSERT INTO uploaded_images(name,images)VALUES('$userName','$filePath')");
    // header('Location: /');
}
else{
    // header('Location: /');
}
$statement = ($app['db'])->query("SELECT * FROM uploaded_images");
$allDetails=$statement->fetchAll(PDO::FETCH_OBJ);
require 'index.php';
require 'index.html';
