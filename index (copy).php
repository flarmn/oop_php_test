 <?php


class SimpleClass
{
    // объявление свойства
    public $var = 'значение по умолчанию';

    // объявление метода
    public function displayVar() {
    	echo "<br>";
        echo $this->var;
        echo "<br>";
    }
}


echo "Start";

$a = new SimpleClass();
$c = new SimpleClass();

$a->displayVar();
//$v = $a->var;
echo $a->var;


echo "<br>" . "Running method from newly created c object";
$c->displayVar();
echo "<br>" . "changing data of var in c object";
$c->var = "zzz";
echo "<br>" . "Running method with new value at c object";
$c->displayVar();

echo "<br>" . "Running method from newly created a object";
$a->displayVar();

echo "<br>" . "Creating new j object from SimpleClass";
$j = new SimpleClass();
$j->displayVar();

?> 
