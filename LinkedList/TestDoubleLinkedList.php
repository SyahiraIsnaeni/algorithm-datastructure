<?php

require_once "DoubleLinkedList.php";

//TEST PREPEND DOUBLE LINKED LIST
$person1 = new DoubleLinkedList();
//var_dump($person1);
$person1->prepend("Syahira");
//var_dump($person1);
$person1->prepend("Isnaeni");
$person1->prepend("Dewi");
//var_dump($person1);

//TEST APPEND DOUBLE LINKED LIST
$person2 = new DoubleLinkedList();
//var_dump($person2);
$person2->append("Syahira");
//var_dump($person2);
$person2->append("Isnaeni");
$person2->append("Dewi");
//var_dump($person2);

//TEST FIND DOUBLE LINKED LIST
$person3 = new DoubleLinkedList();
var_dump($person3->find("Syahira"));
$person3->append("Syahira");
var_dump($person3->find("Syahira"));
$person3->append("Isnaeni");
$person3->append("Dewi");
var_dump($person3->find("Dewi"));
var_dump($person3->find("Joko"));