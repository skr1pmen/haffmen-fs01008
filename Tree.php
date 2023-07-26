<?php

class Tree
{
    public $symbols;
    public $count;
    public $leftChild;
    public $rightChild;

    public function __construct($symbols, $count, $leftChild = null, $rightChild = null)
    {
        $this->symbols = $symbols;
        $this->count = $count;
        $this->leftChild = $leftChild;
        $this->rightChild = $rightChild;
    }

    public function getCode($letter, &$code = ''){
        if (!$this->isLeaf()){
            if (mb_strpos($this->leftChild->symbols, $letter) !== false){
                $code .= '1';
                $this->leftChild->getCode($letter, $code);
            }
            else{
                $code .= '0';
                $this->rightChild->getCode($letter, $code);
            }
        }
    }

    public function isLeaf()
    {
        return $this->leftChild === null and $this->rightChild === null;
    }
}