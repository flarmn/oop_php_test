 <?php



class Node
{
    // properties
    public $i = 1;
    public $child = 'значение по умолчанию';

    // methods
    public function addNode($i) {
$i = $this->i++;
//echo '</br>';
//echo 'Node' . $this->i . '<a href="?command=delete&node=$i"> delete</a><br />';
$this->output();
    }


    public function deleteNode($i) {

    }


    public function output() {
    
    echo 'Node' . $this->i . '<a href="?command=delete&node=$i"> delete</a><br />';
    

    }


     public function getType() {

    }

}//Node


class RootNode extends Node{

}//RootNode


class BranchNode extends Node{
	
}//BranchNode

//echo '<h3>Nodes list:</h3>' . '<br>';

$node = new Node();

//$node->output();
$node->addNode($i);
$node->addNode($i);
$node->addNode($i);
$node->addNode($i);

//$node->addNode($i);

//echo '<a href="?command=add">add new node</a>';


/*
echo '<pre>';
print_r(get_defined_vars());
echo '</pre>';
*/


//echo $GLOBALS;
//var_dump($GLOBALS["node"]);

//var_dump(get_class());

//var_dump($node);

echo $node->child;
unset($node);
echo '<br>';
echo $node->child . "JJJ";
?> 
