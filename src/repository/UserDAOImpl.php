<?php

use App\Repository\UserDAO;

class UserDAOImpl implements UserDAO
{
    public function saveOrUpdate(\App\Entity\User $user): void
    {
        // TODO: Implement saveOrUpdate() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }

    public function findById(int $id): \App\Entity\User
    {
        // TODO: Implement findById() method.
    }

    public function findAll(): \Doctrine\Common\Collections\Collection
    {
        // TODO: Implement findAll() method.
    }

}