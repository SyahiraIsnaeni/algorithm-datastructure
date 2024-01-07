<?php

class NodeSingleLinkedList{
    private mixed $node;
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
                    unset($this->head);
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

    public function deleteTop(): bool{
        if($this->head != null){
            if($this->head->getNext() == null){
                unset($this->head);
                $this->head = null;
                return true;
            }else{
                $temp = $this->head->getNext();
                unset($this->head);
                $this->head = $temp;
                return true;
            }
        }
        return false;
    }

    public function deleteBottom(): bool{
        if ($this->head != null){
            if ($this->head->getNext() == null){
                unset($this->head);
                $this->head = null;
                return true;
            }else{
                $current = $this->head;
                $temp = $this->head;
                while($current->getNext() != null){
                    $temp = $current;
                    $current = $current->getNext();
                }
                $temp->setNext(null);
                unset($current);
                return true;
            }
        }
        return false;
    }

    public function update($value, $newValue): bool{
        if($this->head == null){
            return false;
        }else{
            //klo yang diupdate head satu data
            if($this->head->getNext() == null){
                if($this->head->getNode() == $value){
                    $this->head->setNode($newValue);
                    return true;
                }
            }

            $current = $this->head;
            while($current->getNext() != null){
                if($current->getNode() == $value){
                    $current->setNode($newValue);
                    return true;
                }
                $current = $current->getNext();
            }

            if($current->getNode() == $value){
                $current->setNode($newValue);
                return true;
            }
        }
        return false;
    }

    public function top(){
        if ($this->head == null){
            return null;
        }else{
            return $this->head->getNode();
        }
    }

    public function popTop(){
        if ($this->head == null){
            return null;
        }elseif($this->head->getNext() == null){
            $data = $this->head->getNode();
            $this->head = null;
            return $data;
        }else{
            $data = $this->head->getNode();
            $temp = $this->head->getNext();
            unset($this->head);
            $this->head = $temp;
            return $data;
        }
    }

    public function bottom(){
        if($this->head == null){
            return null;
        }else{
            if($this->head->getNext() == null){
                return $this->head->getNode();
            }
            $current = $this->head;
            while($current->getNext() != null){
                $current = $current->getNext();
            }
            return $current->getNode();
        }
    }

    public function popBottom(){
        if($this->head == null){
            return null;
        }else{
            if($this->head->getNext() == null){
                $data = $this->head->getNode();
                $this->head = null;
                return $data;
            }

            $current = $this->head;
            $temp = $this->head;
            while($current->getNext() != null){
                $temp = $current;
                $current = $current->getNext();
            }

            $temp->setNext(null);
            $data = $current->getNode();
            unset($current);
            return $data;
        }
    }

    public function traverse(){
        if($this->head == null){
            return;
        }

        $data = [];
        $current = $this->head;
        while($current->getNext() != null){
            $data[] = $current->getNode();
            $current = $current->getNext();
        }
        $data[] = $current->getNode();
        return $data;
    }

}