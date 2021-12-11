<?php
//Database

//database credentials
require('database_credentials.php');

/**
 *@author 
 *
 */
class db_connection
{
	//properties
	public $db = null;
	public $results = null;
	

	//connect
	/**
	*Database connection
	*@return bolean
	**/
	function db_connect(){
		
		//connection
		$this->db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
		//test the connection
		if (mysqli_connect_errno()) {
			return false;
		}else{
			
			return true;
		}
	}


	//execute a query
	/**
	*Query the Database
	*@param takes a connection and sql query
	*@return bolean
	**/
	function db_query($sqlQuery){
		if (!$this->db_connect()) {
			
			return false;
		}
		elseif ($this->db==null) {
			return false;
		}

		//run query
		$this->results = mysqli_query($this->db,$sqlQuery);
		if ($this->results == false) {
			
			return false;
		}else{
			// echo "I am here";
			return true;
		}

	}


	function db_fetch(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		//return a record
		return mysqli_fetch_assoc($this->results);

	}
}

//This is for testing whether the database works 
//  $test=new db_connection();
//  echo $test->db_connect();

?>