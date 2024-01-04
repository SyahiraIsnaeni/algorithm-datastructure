<?php

require_once "SingleLinkedList.php";

//TEST PREPEND SINGLE LINKED LIST
$person1 = new SingleLinkedList();
$person1->prepend("syahira");
$person1->prepend("isnaeni");
$person1->prepend("dewi");
//var_dump($person1);

//TEST FIND SINGLE LINKED LIST
$person2 = new SingleLinkedList();
$person2->append("Syahira");
//var_dump($person2->find("Syahira"));
//var_dump($person2);

//TEST DELETE SINGLE LINKED LIST
$person3 = new SingleLinkedList();
//$person3->append("syahira");
//var_dump($person3->delete("joko"));
$person3->prepend("syahira");
//var_dump($person3);

//TEST DELETE TOP SINGLE LINKED LIST
$person4 = new SingleLinkedList();
$person4->append("Syahira");
//var_dump($person4->deleteTop());
//var_dump($person4);
$person4->append("Syahira");
$person4->append("Isnaeni");
//var_dump($person4->deleteTop());
//var_dump($person4);

//TEST DELETE BOTTOM SINGLE LINKED LIST
$person5 = new SingleLinkedList();
$person5->append("Syahira");
$person5->append("Isnaeni");
$person5->append("Dewi");
//var_dump($person5->deleteBottom());
//var_dump($person5);

//TEST UPDATE SINGLE LINKED LIST
$person6 = new SingleLinkedList();
//var_dump($person6->update("Syahira", "Tzuyu"));
$person6->append("Syahira");
$person6->append("Isnaeni");
//var_dump($person6->update("Syahira", "Tzuyu"));
//var_dump($person6->update("Joko", "Dahyun"));
//var_dump($person6);

//TEST TOP SINGLE LINKED LIST
$person7 = new SingleLinkedList();
//var_dump($person7->top());
$person7->append("Syahira");
$person7->append("Isnaeni");
//var_dump($person7->top());