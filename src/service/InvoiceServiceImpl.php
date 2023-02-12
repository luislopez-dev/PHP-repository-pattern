<?php

namespace App\Service;

use App\Entity\Invoice;
use Doctrine\Common\Collections\Collection;

class InvoiceServiceImpl implements InvoiceService
{

    public function saveOrUpdate(Invoice $invoice): void
    {
        // TODO: Implement saveOrUpdate() method.
    }

    public function findById(int $id): Invoice
    {
        // TODO: Implement findById() method.
    }

    public function findAll(): Collection
    {
        // TODO: Implement findAll() method.
    }

    public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}