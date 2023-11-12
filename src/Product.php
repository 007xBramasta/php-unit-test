<?php

//VALUE SET DAN GET

namespace Bramasta\Test;

class Product
{
    private string $id, $name, $description;
    private int $price, $quantitiy;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
         $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
         $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
         $this->description = $description;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function setPrice(int $price): void
    {
         $this->price = $price;
    }

    public function getQuantity(): int
    {
        return $this->quantitiy;
    }

    public function setQuantity(int $quantitiy): void
    {
         $this->quantitiy = $quantitiy;
    }
}