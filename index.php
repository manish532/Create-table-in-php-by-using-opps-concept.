<?php
$db = new mysqli('localhost','root','','opps_database');
if($db->connect_error){
    die("failed");
}

else{
      
 class create_table{
   private $sql_query;
   private $response;
   function __construct(){


   $this->sql_query = "CREATE TABLE employes(
   
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP

        
   )";
   
   $this->response = $GLOBALS['db']->query($this->sql_query);



   if($this->response){
     echo "table succefully created";
   }
   else{
    echo "table already created try another name";
   }

   }
 }

}
new create_table();

?>