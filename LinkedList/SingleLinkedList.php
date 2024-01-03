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

    public function setNode($node): void
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

    public function find($value): bool
    {
        if($this->head == null){
            return false;
        }else{
            $current = $this->head;
            while($current->getNext() != null){
                if($current->getNode() == $value){
                    return true;
                }
                $current = $current->getNext();
            }
            if($current->getNode() == $value){
                return true;
            }
        }
        return false;
    }

    public function delete($value): bool
    {
        if($this->head == null){
            return false;
        }else{
            //klo yang dihapus head satu data
            if($this->head->getNext() == null){
                if($this->head->getNode() == $value){
                    $this->head = null;
                    return true;
                }
            }

            $current = $this->head;
            $temp = $this->head;
            while($current->getNext() != null){
                if($current->getNode() == $value){
                    if($current == $this->head){
                        $this->head = $this->head->getNext();
                    }

                    $temp->setNext($current->getNext());
                    unset($current);
                    return true;
                }
                $temp = $current;
                $current = $current->getNext();
            }

            if($current->getNode() == $value){
                $temp->setNext(null);
                unset($current);
                return true;
            }

        }
        return false;
    }

    public function deleteTop(){

    }

    public function deleteBottom(){

    }

    public function update($value){

    }

    public function top(){

    }

    public function popTop(){

    }

    public function bottom(){

    }

    public function popBottom(){

    }

    public function traverse(){

    }

}