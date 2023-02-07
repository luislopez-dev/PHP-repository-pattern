<?php

namespace App\Service;

use App\Entity\Client;
use App\Repository\ClientDAO;
use Doctrine\Common\Collections\Collection;

class ClientServiceImpl implements ClientService
{
    private ClientDAO $clientDAO;

    /**
     * @param ClientDAO $clientDAO
     */
    public function __construct(ClientDAO $clientDAO) {
        $this->clientDAO = $clientDAO;
    }

    public function saveOrUpdate(Client $user): void
    {
        $this->clientDAO->saveOrUpdate($user);
    }

    public function delete(int $id): void
    {
        $this->clientDAO->delete($id);
    }

    public function findById(int $id): Client
    {
        return $this->clientDAO->findById($id);
    }

    public function findAll(): Collection
    {
        return $this->clientDAO->findAll();
    }

}