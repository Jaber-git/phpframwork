<?php

include_once 'registry/registry.class.php';
include_once 'registry/databaseobjects/mysql.database.class.php';
//create an object of registry
$regi=Registry::Singleton();
//in registry we stroe database object
$regi->storeObject('mysql.database', 'db');
$regi->getURLData();

//connect db via registry
$conn=$regi->getObject('db')->newConnection("localhost","root"," ","dv_mvc");

$sql = "SELECT id, name,title FROM category";
//echo "this for test";
//echo "this for branch test";
$result=$regi->getObject('db')->executeQuery( $sql );
// $rw=$obj->getRows();

 echo "<br/>";
?>







<table style="margin :0;paddin :0; color:blue; width:250px; line-height:25px;border: 2px solid yellow">

        <tr style="margin :0;paddin :0; border: 2px solid red;">
            <th  style="border: 2px solid blue;">No</th>
            <th  style=" border: 2px solid blue;">name</th>
            <th  style=" border: 2px solid blue;">Title</th>
        </tr>

    <?php    foreach($result as $k=>$v) {  ?>
    <tr style="border: 2px solid dashed;">
          <td style=" border: 2px solid blue;"><?php echo $v["id"]; ?> </td>
          <td style=" border: 2px solid blue;"><?php echo $v["name"];   ?> </td>
          <td style=" border: 2px solid blue;"><?php echo  $v["title"]; ?> </td>
    </tr>
  <?php } ?>
</table>
