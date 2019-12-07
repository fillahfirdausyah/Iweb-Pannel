<?php
include "../config.php";
session_start();
$storeku = $_SESSION['stores'];
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $link->query("SELECT * FROM product WHERE name LIKE '%".$searchTerm."%' AND stores='$storeku' ORDER BY name ASC");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['name'];
	
}
//return json data
echo json_encode($data);
?>

