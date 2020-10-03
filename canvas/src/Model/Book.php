<?php

namespace App\Model;

class Book
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $category;

    public function __construct(int $id, string $label, string $isbn, string $category)
    {
        $this->id = $id;
        $this->label = $label;
        $this->isbn = $isbn;
        $this->category = $category;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getIsbn(): string
    {
        return $this->isbn;
    }

    public function getCategory(): string
    {
        return $this->category;
    }
}