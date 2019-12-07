<?php  
include ("../config.php");
$result = $link->query("SELECT * FROM product WHERE stores='" .$_SESSION['stores']. "'");
$jsArray = "var prdName = new Array();\n";  
		
echo '<input type="text" id="products" name="name" onkeypress="changeValue(this.value)" placeholder=" Search Products ..."  >';
echo '<select id="hasil" name="name" onchange="changeValue(this.value)" hidden>';  
echo '<option>-------</option>';  
		
while ($row = mysqli_fetch_array($result)) 
{  

echo '<option value="' . $row['name'] . '">' . $row['name'] . '</option>';  

$jsArray .= "prdName['" . $row['name'] . "'] = {
	
namap:'".addslashes($row['name'])."',
picp:'".addslashes($row['pic'])."',
unitp:'".addslashes($row['unit'])."',
codxp:'".addslashes($row['codx'])."',
hargap:'".addslashes($row['price'])."',
profitp:'".addslashes($row['profit'])."',
qtyp:'".addslashes($row['qty'])."'};\n"; 
 
}  
		echo '</select>';  
	
?>