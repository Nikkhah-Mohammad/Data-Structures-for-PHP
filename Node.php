<?php

class Node {
  public $data;
  public $next;
}

class LinkedList {
  public $head;

  public function __construct(){
    $this->head = null;
  }
  

  public function push($newElement) {
    $newNode = new Node();
    $newNode->data = $newElement;
    $newNode->next = null; 
    if($this->head == null) {
      $this->head = $newNode;
    } else {
      $tmp = new Node();
      $tmp = $this->head;
      while($tmp->next != null) {
        $tmp = $tmp->next;
      }
      $tmp->next = $newNode;
    }    
  }

  public function PrintList() {
    $tmp = new Node();
    $tmp = $this->head;
    if($tmp != null) {
      echo "\nThe list : ";
      while($tmp != null) {
        echo $tmp->data." ,";
        $tmp = $tmp->next;
      }
    } else {
      echo "\nempty";
    }
  }    
};


$testList = new LinkedList();


$testList->push(233);
$testList->push(232);
$testList->push("salam");
$testList->PrintList();
?>