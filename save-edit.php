<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'itflab.mysql.database.azure.com', 'miew@itflab', 'It123456789', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];
$id = $_POST['id']
	
$sql = "UPDATE guestbook SET name = '$name' , comment = '$comment' , link = '$link' WHERE id = $id;" ;
$query = mysqli_query($conn , $sql);

if($query){
	header('location: show.php');
}else{
	echo 'Can not Update!';
}
?>
