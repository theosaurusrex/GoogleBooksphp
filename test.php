<?php
 
class Test
{
  public $prop1 = "I'm a class property!";
 
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }
 
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}
 
$obj = new Test;
 
echo $obj->prop1;
 
?>