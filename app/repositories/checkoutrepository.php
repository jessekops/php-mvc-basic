<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/order.php';

class CheckoutRepository extends Repository
{
    public function insert($firstName, $lastName, $emailAddress, $dateOrdered, $price)
    {
        try {
            $sqlquery = "INSERT INTO `orders` (firstName, lastName, emailAddress, dateOrdered, price) VALUES(:firstName, :lastName, :emailAddress, :dateOrdered, :price)";
            $stmt = $this->connection->prepare($sqlquery);

            $stmt->bindParam(':firstName', $firstName);
            $stmt->bindParam(':lastName', $lastName);
            $stmt->bindParam(':emailAddress', $emailAddress);
            $stmt->bindParam(':dateOrdered', $dateOrdered);
            $stmt->bindParam(':price', $price);

            $stmt->execute();

        } catch (PDOException $e) {
            echo $e;
        }
    }
}