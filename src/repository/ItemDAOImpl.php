<?php

namespace App\Repository;

use App\Entity\Item;
use Doctrine\Common\Collections\Collection;

class ItemDAOImpl implements ItemDAO
{

    public function saveOrUpdate(Item $invoice): void
    {
        // TODO: Implement saveOrUpdate() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }

    public function findById(int $id): Item
    {
        // TODO: Implement findById() method.
    }

    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }
}