<?php
header("refresh: 3");

echo "
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css'>
  <style>
  #tname {
        
  background-color:#b3cccc;
  border-radius:5px;
      
  }
  </style>
  
  ";
  
  
  
$con=@mysql_connect("localhost","sasuvzor_battery","M@he5hwari","sasuvzor_battery");
if (!$con) {
 // echo "not";
  }
  else{
   // echo "connected";
  }

$query=mysql_select_db("sasuvzor_battery");
$i=0;
$result=mysql_query("SELECT battery,device_name from tab");
while($row=mysql_fetch_array($result)){
  $charge[$i]=$row["battery"];
  $tabname[$i]=$row["device_name"];
  //echo $charge[$i]." ".$tabname[$i]."<br>";
$i++;

}

   echo "<br><center><b> <font size='5'> Battery  Status</font></center><br>";

for ($i=0;$i<count($tabname);$i++){
 
    
    echo "
    <div  class='w3-container'> 
    <div class='row' id='row'><br>
     
     <div class='col-sm-1'><center><b>".ucfirst($tabname[$i])."</b></center></div>

    <div class='col-sm-11'>
          <div class='w3-light-grey'>";
             if($charge[$i]>=50){
         
         echo" <div class='w3-container  w3-center'style='width:".$charge[$i]."% ;background-color:#2196F3;'><center>".$charge[$i]."%</center></div>
         </div><br>";
     }else if ($charge[$i]<=20){
          echo" <div class='w3-container  w3-center'style='width:".$charge[$i]."% ;background-color:#f44336;'><center>".$charge[$i]."%</center></div>
         </div><br>";
         
     } else {
          echo" <div class='w3-container   w3-center' style='width:".$charge[$i]."% ;background-color:#aCAF50;'><center>".$charge[$i]."%</center></div>
         </div><br>";
     }
    
    
    echo "</div>
    </div>";
}



?>