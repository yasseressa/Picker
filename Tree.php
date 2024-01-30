<?php

use function PHPSTORM_META\type;

class Tree {
  // Properties
  private $id;
  private $name;
  private $type;
  private $amount;
  private $min;
  private $max;
  
  // This constructor function
  function __construct($id, $name, $type, $amount, $min, $max) {
    $this->name = $name;
    $this->id = $id;
    $this->type = $type;
    $this->amount = $amount;
    $this->min = $min;
    $this->max = $max;
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
  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }
  function set_amount($amount) {
    $this->amount = $amount;
  }
  function get_amount() {
    return $this->amount;
  }
  function set_min($min) {
    $this->min = $min;
  }
  function get_min() {
    return $this->min;
  }
  function set_max($max) {
    $this->min = $max;
  }
  function get_max() {
    return $this->max;
  }
}
?>
