<?php

class NodeDoubleLinkedList{
    private $node;

    private $next;

    private $prev;

    public function __construct($node)
    {
        $this->node = $node;
        $this->next = null;
        $this->prev = null;
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

    public function setNext($next): void
    {
        $this->next = $next;
    }

    public function getPrev()
    {
        return $this->prev;
    }

    public function setPrev($prev): void
    {
        $this->prev = $prev;
    }

}

class DoubleLinkedList{

    private $head;

    private $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }


    public function prepend($value){
        $newNode = new NodeDoubleLinkedList($value);
        if ($this->head == null){
            $this->head = $newNode;
            $this->tail = $newNode;
        }else{
            $this->head->setPrev($newNode);
            $temp = $this->head;
            $this->head = $newNode;
            $this->head->setNext($temp);
        }
    }

    public function append($value){
        $newNode = new NodeDoubleLinkedList($value);
        if($this->tail == null){
            $this->head = $newNode;
            $this->tail = $newNode;
        }else{
            $this->tail->setNext($newNode);
            $temp = $this->tail;
            $this->tail = $newNode;
            $this->tail->setPrev($temp);
        }
    }

    public function find($value): bool{
        if($this->head != null){
            if($this->head->getNode() == $value){
                return true;
            }

            $current = $this->head;
            while ($current->getNext() != null){
                if($current->getNode() == $value){
                    return true;
                }
                $current = $current->getNext();
            }

            if($current->getNode() == $value){
                return true;
            }

            return false;
        }
        return false;
    }

    public function delete($value): bool{
        if($this->head != null){
            if($this->head->getNext() == null){
                if ($this->head->getNode() == $value){
                    unset($this->head);
                    unset($this->tail);
                    $this->head = null;
                    $this->tail = null;
                    return true;
                }
            }else{
                if($this->head->getNode() == $value){
                    $this->head->getNext()->setPrev(null);
                    $temp = $this->head->getNext();
                    unset($this->head);
                    $this->head = $temp;
                    return true;
                }
            }

            if($this->tail->getNode() == $value){
                $temp = $this->tail->getPrev();
                unset($this->tail);
                $this->tail = $temp;
                $this->tail->setNext(null);
                return true;
            }

            $current = $this->head;
            while ($current->getNext() != null){
                if($current->getNode() == $value){
                    $current->getPrev()->setNext($current->getNext());
                    $current->getNext()->setPrev($current->getPrev());
                    unset($current);
                    return true;
                }
                $current = $current->getNext();
            }

            return false;
        }

        return false;
    }

    public function update($value, $newValue): bool{

        if($this->head != null){
            if($this->head->getNode() == $value){
                $this->head->setNode($newValue);
                return true;
            }

            if($this->head->getNext() != null){
                $current = $this->head;
                while($current->getNext() != null){
                    if($current->getNode() == $value){
                        $current->setNode($newValue);
                        return true;
                    }
                    $current = $current->getNext();
                }

                if ($current->getNode() == $value){
                    $current->setNode($newValue);
                    return true;
                }
            }

            return false;
        }
        return false;
    }

    public function deleteTop(): bool{
        if ($this->head != null){
            if($this->head->getNext() == null){
                unset($this->head);
                unset($this->tail);
                $this->head = null;
                $this->tail = null;
                return true;
            }else{
                $this->head->getNext()->setPrev(null);
                $temp = $this->head->getNext();
                unset($this->head);
                $this->head = $temp;
                return true;
            }
        }
        return false;
    }

    public function deleteBottom(): bool{
        if($this->head != null){
            if ($this->tail->getPrev() == null){
                unset($this->tail);
                unset($this->head);
                $this->head = null;
                $this->tail = null;
                return true;
            }else{
                $temp = $this->tail->getPrev();
                $this->tail->getPrev()->setNext(null);
                unset($this->tail);
                $this->tail = $temp;
                return true;
            }
        }
        return false;
    }

    public function top(){
        if ($this->head != null){
            return $this->head->getNode();
        }else{
            return null;
        }
    }

    public function popTop(){
        if($this->head != null){
            if ($this->head->getNext() == null){
                $data = $this->head->getNode();
                unset($this->head);
                unset($this->tail);
                $this->head = null;
                $this->tail = null;
                return $data;
            }else{
                $data = $this->head->getNode();
                $temp = $this->head->getNext();
                $this->head->getNext()->setPrev(null);
                unset($this->head);
                $this->head = $temp;
                return $data;
            }
        }
        return null;
    }

    public function bottom(){
        if($this->tail != null){
            return $this->tail->getNode();
        }
        return null;
    }

    public function popBottom(){
        if ($this->tail != null){
            if($this->tail->getPrev() == null){
                $data = $this->tail->getNode();
                unset($this->tail);
                unset($this->head);
                $this->tail = null;
                $this->head = null;
                return $data;
            }else{
                $data = $this->tail->getNode();
                $temp = $this->tail->getPrev();
                unset($this->tail);
                $this->tail = $temp;
                $this->tail->setNext(null);
                return $data;
            }
        }
        return null;
    }

    public function traverse(){

    }

}