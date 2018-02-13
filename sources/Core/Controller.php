<?php
class Controller
{
    public function call($name,$method,$arr)
    {
        $object = new $name;
        if ($arr) {
            $object->$method($arr);
        }else{
            $object->$method();
        }
        
    }
  
}