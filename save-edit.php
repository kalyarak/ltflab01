<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'Mw7456891023', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


if($_POST['user-id']){
    $id = $_POST['user-id'];
}else{
    echo "id not found";
    die();
}

$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];

$sql = "UPDATE guestbook SET name = $name , comment = $comment , link = $link WHERE id = $id" ;
$query = mysqli_query($conn , $sql);

?>
