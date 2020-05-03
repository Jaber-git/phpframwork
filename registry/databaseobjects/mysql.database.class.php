<?php

class mysqldatabase {

private $conn=array();
private $res;



public function __construct(){

}
  public function newConnection($host,$user, $password ,$database){
      $this->conn=  new mysqli ($host,$user, $password ,$database);
       echo "connection is succesfull and Fetch from database";
       return $this->conn;
  }

  public function getRows()
      {
      	return $this->res->fetch_array(MYSQLI_ASSOC);
      }





  public function insertRecords($table){
    //
    foreach($data as $f =>$v) {
      $fields .= "'$f,'";
      $values .=(is_numeric($v) && (intval($v)==$v))? $v.",":"'v',";
        }
      $insert= "INSERT INTO $table ({$fields}) VALUES({$values})";
      $this->executeQuery($insert);

      return true;
    }

public function executeQuery($queryStr){
  $this->res= $this->conn->query($queryStr);
    return $this->res;
        }


  }






 ?>
