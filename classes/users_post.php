<?php
//connect to database class
require("../models/database_class.php");


class Post extends db_connection {
    public function create($fullname,$email,$password){
        // echo"I am here";
        $sql = "INSERT INTO `CUSTOMERS_TABLE`(`fullname`,`email`,`password`) VALUES 
        ('$fullname','$email','$password')";

        // run query
        return $this->db_query($sql);
    }


    public function getuserinfo($email,$password){

        // sql query
        $sql = "SELECT * FROM `CUSTOMERS_TABLE` WHERE `password`='$password' AND `email`='$email'";

        // run query
        return $this->db_query($sql);
    }


    public function review($name,$review){
        // echo"I am here";
        $sql = "INSERT INTO `REVIEWS`(`username`,`review`) VALUES 
        ('$name','$review')";

        // run query
        return $this->db_query($sql);
    }

    public function getallreviews(){
        //sql query
        $sql = "SELECT * FROM `REVIEWS`";

        //run query
        return $this->db_query($sql);
    }

}
?>