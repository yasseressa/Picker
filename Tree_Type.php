<?php
class TreeType {
  // Properties
  private $id;
  private $name;

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
}
?>
