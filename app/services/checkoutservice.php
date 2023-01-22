<?php
require __DIR__ . '/../repositories/checkoutrepository.php';

class CheckoutService
{
    public function insert($firstName, $lastName, $emailAddress, $dateOrdered, $price)
    {
        $repository = new CheckoutRepository();
        $repository->insert($firstName, $lastName, $emailAddress, $dateOrdered, $price);
    }
}