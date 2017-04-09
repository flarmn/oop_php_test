 <?php


class Node{

public function createNode(){
  $objcount=$_GET["node"];
    for ($i = 1; $i < $objcount; $i++){
    $this->{"objs". $i} = new newNode();
    $this->{"objs". $i}->createNewNode($i);
    }//for
  }//createNode


public function deleteNode(){
ob_clean();

$objcount = $_GET["node"]-2;
//$objcount = $objcount +1;
echo $objcount;
for ($i = 1; $i < $objcount; $i++){

	//header("Refresh:0; url=?command=delete&node="  . "$objcount ");
echo '<a href="?command=delete&node='  . $objcount .   '"> delete object' . $i . ' </a><br />';

}
}

}//Node


	

class newNode extends Node{

	public function createNewNode($i){
		$objcount = $_GET["node"]+1;
		//$objcount = $objcount-1;
		echo '<a href="?command=delete&node='  . $objcount .   '"> delete object' . $i . ' </a><br />';
		//return $objcount;
		
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
$Node->deleteNode();
}

$objcount=$_GET["node"];

echo '<a href="?command=addobject&node=' . $objcount=$objcount+1 . '">addobject</a>';


//END
?> 
