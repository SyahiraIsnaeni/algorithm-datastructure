<?php

require_once "SingleLinkedList.php";

$person1 = new SingleLinkedList();
$person1->prepend("syahira");
$person1->prepend("isnaeni");
$person1->prepend("dewi");
//var_dump($person1);

$person2 = new SingleLinkedList();
$person2->append("Syahira");
var_dump($person2->find("Syahira"));
//var_dump($person2);

$person3 = new SingleLinkedList();
$person3->append("syahira");
$person3->append("isnaeni");
$person3->append("dewi");
var_dump($person3->delete("isnaeni"));
var_dump($person3);