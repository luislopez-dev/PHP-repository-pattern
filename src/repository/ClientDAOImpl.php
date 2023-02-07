<?php

namespace App\Repository;
use App\Entity\Client;
use App\Repository\interfaces\ClientDAO;
use Doctrine\Common\Collections\Collection;

class ClientDAOImpl implements ClientDAO
{
    public function saveOrUpdate(Client $user): void
    {
        // TODO: Implement saveOrUpdate() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }

    public function findById(int $id): Client
    {
        // TODO: Implement findById() method.
    }

    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

}