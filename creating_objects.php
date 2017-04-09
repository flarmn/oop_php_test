 <?php

class createObject{

public function createNewObject($objcount){
//echo 'object created' . $obj->objcount . '<br/>';
echo '<a href="?command=delete&node=' . $objcount . '"> delete</a><br />';
}

}//class


class constructObject{
public $objcount = 1;

public function constrNewObject(){
	ob_clean();
$objcount = $this->objcount++;
$this->{"objs". $objcount} = new createObject();
$this->{"objs". $objcount}->createNewObject();
//echo 'done';
}

}//class



$obj = new constructObject();
//$obj->constrNewObject();



echo '<a href="?command=delete&node=' . $objcount . '"> delete</a><br />';
echo '<a href="?command=addobject">addobject</a>';


if ($_GET["command"] == "delete"){

unset($obj->{"objs". $_GET["node"]});

//getObjectsList();

}


if ($_GET["command"] == "addobject"){

$obj->constrNewObject();

getObjectsList($obj);

}

/* =============================================  FUNCTIONS ============================ */
function getObjectsList($obj){
	//ob_clean();
	$c = 10;
	echo '<br/>';
	echo 'OBject list';
	echo '<br/>';	
$rr = (array_keys(get_object_vars($obj)));
for ($i = 1; $i< count($rr); $i++){
echo ($rr[$i]). '<br/>';
}
//echo $i;
//echo '<a href="?command=delete&node=' . $i . '"> delete</a><br />';
//echo '<a href="addobject' . $c . '">addobject</a>';
}//func

function soc(){
print_r($GLOBALS['obj']);
}




//END
?> 
