 <?php


class Node{
public function createNode(){
  $objcount=$_GET["node"];
    for ($i = 1; $i < $objcount; $i++){
    $this->{"objs". $i} = new newNode();
    $this->{"objs". $i}->createNewNode($i);
    }//for
  }//createNode
}//Node




class newNode extends Node{

	public function createNewNode($i){
		$objcount = $_GET["node"];
		echo '<a href="?command=delete&node='  . $objcount .   '"> delete object' . $i . ' </a><br />';
	}

}




$Node = new Node();


$objcount=$_GET["node"];

if ($_GET["node"] == 0){
	$objcount = 1;
}



if ($_GET["command"] == "addobject"){
	$Node->createNode();
}

if ($_GET["command"] == "delete"){
$objcount = $_GET["node"];
$objcount = $objcount-1;
for ($i = 1; $i < $objcount; $i++){
echo '<a href="?command=delete&node='  . $objcount .   '"> delete object' . $i . ' </a><br />';

echo '<br/>';
print_r($GLOBALS);
}

}



echo '<a href="?command=addobject&node=' . $objcount=$objcount+1 . '">addobject</a>';

echo '<br/>';
print_r($GLOBALS);


	echo '<br/>';
	echo 'OBject list';
	echo '<br/>';	
$rr = (array_keys(get_object_vars($Node)));
for ($i = 0; $i< count($rr); $i++){
echo ($rr[$i]). '<br/>';
}



//END
?> 
