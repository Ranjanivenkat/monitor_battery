<?php
$name =$_POST["action"];
$value =$_POST["action1"];
//$name='lenevo';
 //$value=98;

$con=@mysql_connect("localhost","sasuvzor_battery","M@he5hwari","sasuvzor_battery");
if (!$con) {
	echo "not";
	}
	else{
		echo "connected";
	}
$query=mysql_select_db("sasuvzor_battery");

$flag=1;

$result=mysql_query("SELECT device_name from tab");
while($row=mysql_fetch_array($result)){
  //echo $row["device_name"];
  if($name == $row["device_name"]){
       $flag=0;
       
  }
  

}


if ($flag == "1") {
    echo "inserted";
    
    $ins=mysql_query("INSERT INTO tab (battery,device_name) VALUES ('$value', '$name') ");
} else {
    
    echo "updated";
    
    $update=mysql_query("update tab set battery='$value' where device_name='$name'");
}

echo $name;
echo "   "+$value


?>