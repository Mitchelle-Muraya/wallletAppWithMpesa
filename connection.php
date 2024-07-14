<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'fomobegone');
try{
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if(!$db){
    echo "FOMObegone not connected to database";
  }else{
    // echo "Wallet App connected to database";
  }
}catch(Exception $e){
  echo $e->getMessage();
}