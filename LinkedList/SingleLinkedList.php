<?php

class NodeSingleLinkedList{
    private $node;
    private $next;
    public function __construct($node)
    {
        $this->node = $node;
        $this->next = null;
    }

    public function getNode()
    {
        return $this->node;
    }

    public function setNode($node)
    {
        $this->node = $node;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($next)
    {
        $this->next = $next;
    }
}

class SingleLinkedList {
    private $head;

    public function __construct()
    {
        $this->head = null;
    }

    public function prepend($value){
        $newNode = new NodeSingleLinkedList($value);

        if($this->head != null){
            $newNode->setNext($this->head);
        }

        $this->head = $newNode;
    }

    public function append($value){
        $newNode = new NodeSingleLinkedList($value);

        if($this->head == null){
            $this->head = $newNode;
        }else{
            $current = $this->head;

            while($current->getNext() != null){
                $current = $current->getNext();
            }

            $current->setNext($newNode);
        }
    }

}