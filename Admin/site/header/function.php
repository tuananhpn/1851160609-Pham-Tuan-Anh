<?php
require("../mysqli_connect.php");
    function getAlbum($id){
    global $conn;
    $sql = "SELECT*FROM album WHERE categories_id = $id";
    $query = mysqli_query($conn,$sql);
    $rows = mysqli_fetch_all($query, MYSQLI_ASSOC);
    return $rows;
    }

?>