<?php

namespace App\Service;

use App\Entity\Item;
use Doctrine\Common\Collections\Collection;

interface ItemService
{
    public function saveOrUpdate(Item $item): void;
    public function findById(int $id): Item;
    public function findAll(): Collection;
    public function delete(int $id): void;
}