 <?php

class Node{
    public $child = 0;

    public function addNode(){
    }// addNode

public function deleteNode($i){
}// deleteNode

public function output(){
}//output


}// Node



/*
interface HitPoint {
    public abstract function getType();
}
*/



//class RootNode extends Node{
    //final class Product
final class RootNode extends Node

{

  
    private static $instance;

  

    public $a;


   
    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

   
    private function __construct()
    {
    }

    /**
     * Клонирование запрещено
     */
    private function __clone()
    {
    }

    /**
     * Сериализация запрещена
     */
    private function __sleep()
    {
    }

    /**
     * Десериализация запрещена
     */
    private function __wakeup()
    {
    }
}

/*
 * =====================================
 *           USING OF SINGLETON
 * =====================================
 */

$firstProduct = RootNode::getInstance();
$secondProduct = RootNode::getInstance();

$firstProduct->a = 1;
$secondProduct->a = 2;

print_r($firstProduct->a);
// 2
print_r($secondProduct->a);


//echo 'Zuzu';


class BrancheNode extends Node{

}




?> 
