<?php
//connect to database class
require("../models/database_class.php");


class Post extends db_connection {
    public function addProduct($product_name,$image_url,$price,$product_des,$quantity){

        $sql = "INSERT INTO `PRODUCT_TABLE`(`productname`,`quantity`,`price_per_product`,`image_of_product`,`product_des`) VALUES 
        ('$product_name','$quantity','$price','$image_url','$product_des')";

        // run query
        return $this->db_query($sql);
    }


    public function getallproducts(){
        //sql query
        $sql = "SELECT * FROM `PRODUCT_TABLE`";

        //run query
        return $this->db_query($sql);
    }


    public function productinfo($product_name){
        // sql query
        $sql = "SELECT * FROM `PRODUCT_TABLE` WHERE `productname`='$product_name'";

        // run query
        return $this->db_query($sql);
    }


    
    public function updateProductInfo($product_name,$price,$quantity){
        echo $product_name;
        echo $price;
        echo $quantity;
        // sql query
        $sql = "UPDATE `PRODUCT_TABLE` SET `price_per_product`='$price', `quantity`='$quantity' WHERE `productname`='$product_name'";

        // run query
        return $this->db_query($sql);
    }

   
}

?>