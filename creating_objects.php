 <?php


class createObject{

public function createNewObject(){
echo 'object created' . $obj->objcount . '<br/>';

//echo 
}


}


class constructObject{
public $objcount = 1;

public function constrNewObject(){
$objcount = $this->objcount++;
$this->{"objs". $objcount} = new createObject();
$this->{"objs". $objcount}->createNewObject();
}

}



$obj = new constructObject();
$obj->constrNewObject();
$obj->constrNewObject();
$obj->constrNewObject();

//echo $obj->objcount;

/*
echo '<pre>';
print_r(get_defined_vars());
echo '</pre>';
*/

//print_r($GLOBALS['obj']);

$rr = (array_keys(get_object_vars($obj)));
for ($i = 1; $i< count($rr); $i++){
echo ($rr[$i]). '<br/>';
}
//echo ($rr);

//print_r(get_defined_vars('obj'));
//var_dump($node);
?> 
