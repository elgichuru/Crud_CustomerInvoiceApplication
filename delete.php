//code for deleting a product form our database
<?php
require 'database.php';

$product_id=filter_input(INPUT_POST,'product_id',FILTER_VALIDATE_INT);
$category_id=filter_input(INPUT_POST,'category_id',FILTER_VALIDATE_INT);
//delete from the database
if($product_id !=false && $category_id!=false){
$query='DELETE FROM products where productID=:productID';

$statement=$db->prepare($query);
$statement->bindvalue(':productID',$product_id);
$success=$statement->execute();
$statement->closecursor();

}
