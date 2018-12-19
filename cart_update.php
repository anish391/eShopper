<?php
session_start();
include("config.php");

//add product to session or create new one
if(isset($_POST["category"]) && $_POST["category"]=='add' )
{
	foreach($_POST as $key => $value){ //add all post vars to new_product array
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING);
    }
	//remove unecessary vars
	unset($new_product['category']); 
 	//we need to get product name and price from database.
    $statement = $mysqli->prepare("SELECT name, price, img, id FROM products WHERE id=?");
	$statement->bind_param('s', $new_product['id']);
    $statement->execute();
    $statement->bind_result($product_name, $price, $image, $id);
	
	while($statement->fetch()){
		//fetch product name, price from db and add to new_product array
        $new_product["name"] = $product_name; 
        $new_product["price"] = $price;
		$new_product["image"] = $image;
		$new_product["id"] = $id;
		
        
        if(isset($_SESSION["cart_products"])){  //if session var already exist
            if(isset($_SESSION["cart_products"][$new_product['id']])) //check item exist in products array
            {
                unset($_SESSION["cart_products"][$new_product['id']]); //unset old array item
            }           
        }
        $_SESSION["cart_products"][$new_product['id']] = $new_product; //update or create product session with new item  
    } 
}


//update or remove items 
if(isset($_POST["remove_code"]))
{
	//remove an item from product session
	if(isset($_POST["remove_code"]) && is_array($_POST["remove_code"])){
		foreach($_POST["remove_code"] as $key){
			unset($_SESSION["cart_products"][$key]);
		}	
	}
}

//back to return url
header('Location: ' . $_SERVER['HTTP_REFERER']);

?>