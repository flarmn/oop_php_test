 <?php

$objcount=$_GET["node"];

if ($_GET["node"] == 0){
	$objcount = 1;
}

if ($_GET["command"] == "addobject"){
	//$objcount = 1;
$objcount=$objcount+1; 

for ($i = 1; $i < $objcount; $i++){
echo '<a href="?command=delete&node=' . $objcount . '"> delete object ' . $i . '</a><br />';
}
}


if ($_GET["command"] == "delete"){
	ob_clean();
	$objcount=$objcount-1;
	for ($i = 1; $i < $objcount; $i++){
echo '<a href="?command=delete&node=' . $objcount . '"> delete object ' . $i . '</a><br />';
}
}


echo '<a href="?command=addobject&node=' . $objcount . '">addobject</a>';


//END
?> 
