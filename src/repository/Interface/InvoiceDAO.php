<?php

namespace App\Repository;

use App\Entity\Invoice;
use Doctrine\Common\Collections\Collection;

interface InvoiceDAO
{
    public function saveOrUpdate(Invoice $invoice): void;
    public function delete(int $id): void;
    public function findById(int $id): Invoice;
    public function findAll(): Collection;
}