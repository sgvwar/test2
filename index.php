<?php

include 'Calculator.php';


$bd = new SQLite3('calculator');

$r=$bd->query("SELECT name FROM sqlite_master WHERE name='operations'");

if ($r->fetchArray() === false){
    echo "Create table operations\n\n";
    $bd->query("create table operations(operation char(50),param1 float,param2 float)");
    $bd->query("insert into operations values('suma',10,5)");
    $bd->query("insert into operations values('suma',11,5)");
    $bd->query("insert into operations values('suma',12,5)");
    
    $bd->query("insert into operations values('resta',130,5)");
    $bd->query("insert into operations values('resta',130,5)");
    $bd->query("insert into operations values('resta',130,5)");
    
    $bd->query("insert into operations values('multiply',30,5)");
    $bd->query("insert into operations values('multiply',15,5)");
    $bd->query("insert into operations values('multiply',18,5)");
    
    $bd->query("insert into operations values('divide',40,2)");
    $bd->query("insert into operations values('divide',10,8)");
    $bd->query("insert into operations values('divide ',13,5)");
    
    
}

$rs=$bd->query("select * from operations");

$row=array();
$i=0;
while($res = $rs->fetchArray(SQLITE3_ASSOC)){ 

  $row[$i]['operation'] = $res['operation']; 
  $row[$i]['param1'] = $res['param1']; 
  $row[$i]['param2'] = $res['param2']; 

 
  $i++; 
  
} 

$calc=new Calculator();
echo "Calculator Operations\n";
echo "-------------------------\n";
foreach ($row as $r) {
     echo "Operation:[". $r['operation']."] value:".$r['param1']." value:".$r['param2']," = ";
     $resultado=$calc->$r['operation']($r['param1'],$r['param2']);
     $total+=$resultado;
     
     echo $total."\n";
    
}

echo "Total=".$total."\n"; 
    


