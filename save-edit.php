<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'Mw7456891023', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


if($_POST['id']){
    $id = $_POST['id'];
}else{
    echo "id not found";
    die();
}

$name = $_POST['title'];
$comment = $_POST['details'];
$link = $_POST['price'];

$sql = "UPDATE guestbook SET name = $name , comment = $comment , link = $link WHERE id = $id" ;
$query = mysqli_query($conn , $sql);

?>