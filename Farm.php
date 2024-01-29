<?php

use function PHPSTORM_META\type;

class Farm {
  // Properties
  private $id;
  private $name;
  private $trees = array();
  public $apple_allowed;
  public $pear_allowed;

  function __construct($id, $name) {
    $this->name = $name;
    $this->id = $id;
  }

  // Methods gets and sets
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_trees($trees){
    $this->trees = $trees;
  }
  function get_trees(){
    return $this->trees;
  }
  // this function to check if tree exist in array or not
  function is_exist($tree){
    if($tree == null){
        echo "Tree Not Initialized.<br/>";
    }
    else{
        foreach($this->trees as $t){
            if($t->get_id() === $tree->get_id()){
                return $tree->get_id();
            }
        }
        return -1;
    }
  }
  // this function add new tree to array
  function add_tree($tree){
    if($tree == null){
        echo "Tree Not Intialized.<br/>";
    }
    elseif($this->is_exist($tree) != -1){
        echo "This Tree Already Exist.<br/>";
    }
    else{
        array_push($this->trees, $tree);
        echo "Tree Added Successfully (".$tree->get_id().",".
        $tree->get_name().",".$tree->get_type()->get_name(). ",".
        $tree->get_amount().").<br/>";
    }
  }
  // this function remove tree from array
  function remove_tree($tree){
    if($tree == null){
        echo "Tree Not Intialized.<br/>";
    }
    $index = $this->is_exist($tree);
    if($index == -1){
        echo "Tree Not Exist.<br/>";
    }
    else{
        unset($this->trees[$index]);
        echo "Tree Removed Successfully.<br/>";
    }
  }
  // this function collect the all fruits with random number from each tree
  // apple random(40,50)
  // pear random(0,20)
  // first check if the tree include more than minimum
  function collect(){
    $types = array();
    foreach($this->trees as $value){
        $key = array_key_exists("'".$value->get_type()->get_name()."'", $types);
        if($key == false){
            $types["'".$value->get_type()->get_name()."'"] = 0;
            if($value->get_amount()>= $value->get_min()){
              $rand = rand($value->get_min(), $value->get_max());
              $types["'".$value->get_type()->get_name()."'"] += $rand;
            }
        }
        else{
          if($value->get_amount()>= $value->get_min()){
            $rand = rand($value->get_min(), $value->get_max());
              $types["'".$value->get_type()->get_name()."'"] += $rand;
          }
        }
    }
    return $types;
  }
}
?>
