<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\Common\Collections\Collection;

class UserServiceImpl implements UserService
{
    public function saveOrUpdate(User $user): void
    {
        // TODO: Implement saveOrUpdate() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }

    public function findById(int $id): User
    {
        // TODO: Implement findById() method.
    }

    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }
}