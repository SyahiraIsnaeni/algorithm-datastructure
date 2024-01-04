<?php

require_once "SingleLinkedList.php";

$person1 = new SingleLinkedList();
$person1->prepend("syahira");
$person1->prepend("isnaeni");
$person1->prepend("dewi");
//var_dump($person1);

$person2 = new SingleLinkedList();
$person2->append("Syahira");
//var_dump($person2->find("Syahira"));
//var_dump($person2);

$person3 = new SingleLinkedList();
$person3->append("syahira");
//var_dump($person3->delete("syahira"));
$person3->prepend("syahira");
//var_dump($person3);

$person4 = new SingleLinkedList();
$person4->append("Syahira");
//var_dump($person4->deleteTop());
//var_dump($person4);
$person4->append("Syahira");
$person4->append("Isnaeni");
//var_dump($person4->deleteTop());
//var_dump($person4);

$person5 = new SingleLinkedList();
$person5->append("Syahira");
$person5->append("Isnaeni");
$person5->append("Dewi");
var_dump($person5->deleteBottom());
var_dump($person5);