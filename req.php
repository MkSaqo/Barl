<?php 

$conn = [];
$db = mysqli_connect("localhost",'root','Root.1234',"Filmer");

if($_POST['q']){
    $sql = 'SELECT `name` FROM `kinoner` WHERE `name` LIKE "%'.$_POST['q'].'%";';
    $q = mysqli_query($db,$sql);
    while ($a =mysqli_fetch_assoc($q)) {
        $conn[] =$a['name']; 
    }

}

echo json_encode($conn);


?>