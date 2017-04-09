 <?php

echo '<a href="?command=addobject&node=' . $objcount=$_GET["node"]+1 . '">addobject</a><br />';

for ($i = 1; $i < $_GET["node"]; $i++){
echo '<a href="?command=delete&node='  . $objcount=$_GET["node"]-1 .   '"> delete object' . $i . ' </a><br />';
}

//END
?> 
