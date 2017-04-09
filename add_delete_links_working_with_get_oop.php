 <?php

 class Node{
public function output(){
for ($i = 1; $i < $_GET["node"]+1; $i++){
echo '<a href="?command=delete&node='  . $objcount=$_GET["node"]-1 .   '"> delete object' . $i . ' </a><br />';
}
 	}
 }


$Node = new Node();
//$objcount=$_GET["node"]+1;
echo '<a href="?command=addobject&node=' . $objcount=$_GET["node"]+1 . '">addobject</a><br />';

if($_GET["command"]=="addobject"){
$Node->output();
}

if($_GET["command"]=="delete"){
$Node->output();
}

//END
?> 
