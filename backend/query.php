<?php

   require_once('connect.php');

   class Query extends DatabaseConnection{

   	private $Connection = "";
   	 function __construct(){

         parent::__construct();

         $this->Connection = $this->connect();

   	 }
   	 public function count($sql){

   	 	 return mysqli_fetch_row(mysqli_query($this->Connection,$sql))[0];

   	 }
   	 public function row($sql){

   	 	return mysqli_fetch_assoc(mysqli_query($this->Connection,$sql));

   	 }
   	 public function rows($sql){

   	 	return mysqli_query($this->Connection,$sql);

   	 }
   	 public function insert($sql){

   	 	 if(mysqli_query($this->Connection,$sql)){

   	 	 	 return true;

   	 	 }else{

   	 	 	return false;

   	 	 }

   	 }
       public function delete($sql){

         if(mysqli_query($this->Connection,$sql)){

            return true;

         }else{

            return false;

         }

       }
   	 #Auxilliary Functions

   	 public function assoc($query){

   	 	 return mysqli_fetch_assoc($query);

   	 }

   }



?>