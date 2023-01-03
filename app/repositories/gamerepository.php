<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/game.php';

class GameRepository extends Repository {

    function getAll() {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM games");
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Game');
            $games = $stmt->fetchAll();

            return $games;

        } catch (PDOException $e)
        {
            echo $e;
        }
    }
}