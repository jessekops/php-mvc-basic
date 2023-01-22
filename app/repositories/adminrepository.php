<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/game.php';

class AdminRepository extends Repository {

    function getAll() {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM games ORDER BY date ASC;");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Game');
            $games = $stmt->fetchAll();

            return $games;

        } catch (PDOException $e)
        {
            echo $e;
        }
    }

    public function insert($opponent, $date, $price, $time) {
        try {
            $sqlquery = "INSERT INTO games (opponent, date, price, time) VALUES(:opponent, :date, :price, :time)";
            $stmt = $this->connection->prepare($sqlquery);
            
            $stmt->bindParam(':opponent', $opponent);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':time', $time);

            $stmt->execute();

        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function updateOne($id, $opponent, $date, $price, $time) {
        try {
            $sqlquery = "UPDATE games SET opponent=:opponent, date=:date, price=:price, time=:time WHERE id=:id";
            $stmt = $this->connection->prepare($sqlquery);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':opponent', $opponent);
            $stmt->bindParam(':date', $date);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':time', $time);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }


    public function deleteOne($id) {
        try {
            $sqlquery = "DELETE FROM games WHERE id = :id";
            $stmt = $this->connection->prepare($sqlquery);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }
}