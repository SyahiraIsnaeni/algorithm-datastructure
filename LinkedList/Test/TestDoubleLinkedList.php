<?php

require_once "../DoubleLinkedList.php";

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
//var_dump($person3->find("Syahira"));
$person3->append("Syahira");
//var_dump($person3->find("Syahira"));
$person3->append("Isnaeni");
$person3->append("Dewi");
//var_dump($person3->find("Dewi"));
//var_dump($person3->find("Joko"));

//TEST DELETE DOUBLE LINKED LIST
$person4 = new DoubleLinkedList();
//var_dump($person4->delete("Syahira"));
//var_dump($person4);
//$person4->append("Syahira");
//var_dump($person4->delete("Syahira"));
//var_dump($person4);
$person4->append("Syahira");
$person4->append("Isnaeni");
$person4->append("Dewi");
//var_dump($person4->delete("Syahira"));
//var_dump($person4);
//var_dump($person4->delete("Dewi"));
//var_dump($person4);
//var_dump($person4->delete("Isnaeni"));
//var_dump($person4);
$person4->append("Syahira");
$person4->append("Isnaeni");
$person4->append("Dewi");
//var_dump($person4->delete("Isnaeni"));
//var_dump($person4);

//TEST UPDATE DOUBLE LINKED LIST
$person5 = new DoubleLinkedList();
//var_dump($person5->update("Syahira", "Tzuyu"));
//var_dump($person5);
$person5->append("Syahira");
//var_dump($person5->update("Syahira", "Tzuyu"));
//var_dump($person5);
$person5->append("Isnaeni");
//var_dump($person5->update("Syahira", "Tzuyu"));
//var_dump($person5);
$person5->append("Dewi");
//var_dump($person5->update("Dewi", "Tzuyu"));
//var_dump($person5);

//TEST DELETE TOP DOUBLE LINKED LIST
$person6 = new DoubleLinkedList();
//var_dump($person6->deleteTop());
$person6->append("Syahira");
//var_dump($person6->deleteTop());
//var_dump($person6);
$person6->append("Isnaeni");
$person6->append("Dewi");
//var_dump($person6->deleteTop());
//var_dump($person6);

//TEST DELETE BOTTOM DOUBLE LINKED LIST
$person7 = new DoubleLinkedList();
//var_dump($person7->deleteBottom());
$person7->append("Syahira");
//var_dump($person7);
//var_dump($person7->deleteBottom());
//var_dump($person7);
$person7->append("Isnaeni");
$person7->append("Dewi");
//var_dump($person7->deleteBottom());
//var_dump($person7);

//TEST TOP DOUBLE LINKED LIST
$person8 = new DoubleLinkedList();
//var_dump($person8->top());
$person8->append("Syahira");
$person8->append("Isnaeni");
//var_dump($person8->top());

//TEST POP TOP DOUBLE LINKED LIST
$person9 = new DoubleLinkedList();
//var_dump($person9->popTop());
$person9->append("Syahira");
$person9->append("Isnaeni");
//var_dump($person9->popTop());
//var_dump($person9);

//TEST BOTTOM DOUBLE LINKED LIST
$person10 = new DoubleLinkedList();
//var_dump($person10->bottom());
$person10->append("Syahira");
$person10->append("Isnaeni");
//var_dump($person10->bottom());


$person11 = new DoubleLinkedList();
//var_dump($person11->popBottom());
$person11->append("Syahira");
//var_dump($person11->popBottom());
//var_dump($person11);
$person11->append("Isnaeni");
//var_dump($person11->popBottom());
//var_dump($person11);

$person12 = new DoubleLinkedList();
var_dump($person12->traverse());
$person12->append("Syahira");
$person12->append("Isnaeni");
$person12->append("Dewi");
if ($person12->traverse() != null){
    echo implode(", ", $person12->traverse());
}
