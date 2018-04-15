

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title><?php echo "PHP Object Oriented Programming"; ?></title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
        
<?php
class Animal {
    
    protected $name;
    protected $favorite_food;
    protected  $sound;
    protected $id;
    
    public static $number_of_animals = 1;
    const PI = "3.14159";
    
    function getName(){
    
            return $this->name;
    }
    
    function __construct(){
        
    $this->id = rand(100,1000000);
        echo $this->id ." has been assigned<br />";
        Animal::$number_of_animals++;
    }
    
    public function __destruct(){
        
        echo $this->name. " is being destroyed<br />";
    }
    
    function __get($name){
      echo "Asked for "  . $name . "<br />";
      return $this->name;
    }
    
    function __set($name, $value)
    {
        switch($name)
        {
            case "name" :
                $this->name= $value;
                break;
              case "favorite_food" :
                $this->favorite_food= $value;
                break;
              case "sound" :
                $this->sound= $value;
                break;
        }
    }
        
    function run(){
        echo $this->name. " runs<br />";
        }    
    }
    
    class Dog extends Animal{
        
        function run(){
        echo $this->name. " runs like crazy<br />";
    }    
        
    }
    
    $animals_one = new Animal();
    
    $animals_one->name = "Spot";
    $animals_one->favorite_food = "Meat";
    $animals_one->sound = "Ruff";

echo $animals_one->name . " says " . $animals_one->sound . " give me some " . $animals_one->favorite_food . " my id is " . $animals_one->id;

?>
