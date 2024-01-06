<?php

require_once "DoubleLinkedList.php";

$person1 = new DoubleLinkedList();
var_dump($person1);
$person1->prepend("Syahira");
var_dump($person1);
$person1->prepend("Isnaeni");
$person1->prepend("Dewi");
var_dump($person1);