<?php
include_once 'includess/conniction.php';
$id = $_POST['id'];
$query = "DELETE from matchs where id = $id;";
$result = mysqli_query($link, $query);
if ($result) {
    header('Location:table2.php');
} else {
    include_once 'erorr.php';
}