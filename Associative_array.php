<?php

//First Way
$sdata=array("sid"=>101,"sname"=>"Diya","sadd"=>"Alkapuri");
echo $sdata["sid"]."<br>";
echo $sdata["sname"]."<br>";
echo $sdata["sadd"]."<br>";

//Second Way
$edata["eid"]=101;
$edata["dept"]="Sales";
$edata["Salary"]=25000;
echo "Eid=".$edata["eid"]."<br>";
echo "Deparatment=".$edata["dept"]."<br>";
echo "Salary=".$edata["Salary"]."<br>";
foreach($sdata as $x)
{
 echo "<br>";
 echo $x;
    
} 


?>