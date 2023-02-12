<?php

namespace App\Service;

use App\Entity\User;
use Doctrine\Common\Collections\Collection;

interface UserService
{
    public function saveOrUpdate(User $user): void;
    public function delete(int $id): void;
    public function findById(int $id): User;
    public function findAll(): Collection;
}