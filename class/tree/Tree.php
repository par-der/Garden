<?php

//namespace Garden\Class\Tree;

// Родительский класс Tree для деревьев
class Tree {

    protected string $id;
    protected int $countFruit;

    /**
     * Tree constructor.
     */
    public function __construct()
    {
        $this->id = $rand = substr( str_shuffle( 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM' ), 0, 10 );
    }

    /**
     * @return string
     */
    public function getTreeId(): string
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getCountFruit(): int
    {
        return $this->countFruit;
    }

    public function getFruits(): array
    {
        return [];
    }
}