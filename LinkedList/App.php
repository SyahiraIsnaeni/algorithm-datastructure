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
var_dump($person2);
