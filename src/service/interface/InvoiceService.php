<?php

namespace App\Service;

use App\Entity\Invoice;
use Doctrine\Common\Collections\Collection;

interface InvoiceService
{
    public function saveOrUpdate(Invoice $invoice): void;
    public function findById(int $id): Invoice;
    public function findAll(): Collection;
    public function delete(int $id): void;
}