 <?php

class createObject{

public function createNewObject(){
echo 'object created' . $obj->objcount . '<br/>';
}

}//class


class constructObject{
public $objcount = 1;

public function constrNewObject(){
$objcount = $this->objcount++;
$this->{"objs". $objcount} = new createObject();
$this->{"objs". $objcount}->createNewObject();
echo 'done';
}

}//class



   $routeArray = explode('/', $_SERVER['REQUEST_URI']);
   $route = array();
    foreach ($routeArray as $value) {
        if (!empty($value)) {
            $route[] = trim($value);
        }
    }




$obj = new constructObject();
$obj->constrNewObject();

print_r($_GET);



if( $route[2] == "haha"){
	unset($obj->objs1);
	getObjectsList($obj);
}

if( $route[2] == "addobject"){
	$obj->constrNewObject();
	getObjectsList($obj);
}

/* =============================================  FUNCTIONS ============================ */
function getObjectsList($obj, $c){
	ob_clean();
	$c = 10;
	echo '<br/>';
	echo 'OBject list';
	echo '<br/>';	
$rr = (array_keys(get_object_vars($obj)));
for ($i = 1; $i< count($rr); $i++){
echo ($rr[$i]). '<br/>';
}
echo $i;
echo '<a href="?command=delete&node=' . $i . '"> delete</a><br />';
echo '<a href="addobject' . $c . '">addobject</a>';
}//func

function soc(){
print_r($GLOBALS['obj']);
}




//END
?> 
