<?php
include 'connect.php';
    $id = $_GET['id'];

    var_dump($id);

    $sql = "DELETE FROM crud.crudoperation WHERE id=$id";
    $query = $conn->prepare($sql);
    $query->execute();

    // var_dump($query);

?>