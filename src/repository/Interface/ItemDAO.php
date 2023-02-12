<?php

namespace App\Repository;
use App\Entity\Item;
use Doctrine\Common\Collections\Collection;

interface ItemDAO
{
    public function saveOrUpdate(Item $invoice): void;
    public function delete(int $id): void;
    public function findById(int $id): Item;
    public function findAll(): Collection;
}