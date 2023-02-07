<?php

namespace App\Repository;

use App\Entity\Client;
use Doctrine\Common\Collections\Collection;

interface ClientDAO
{
    public function saveOrUpdate (Client $user): void;
    public function delete (int $id): void;
    public function findById (int $id): Client;
    public function findAll (): Collection;
}