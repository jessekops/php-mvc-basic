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

    function getOne($id) {
        try {
            $stmt = $this->connection->prepare("SELECT * FROM games WHERE id=:id");
            

            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Game');
            $games = $stmt->fetchAll();

            return $games;

        } catch (PDOException $e)
        {
            echo $e;
        }
    }

    public function getAllGamesInCart($gamesInCart)
    {
        try {
            $array = implode(',', array_fill(0, count($gamesInCart), '?')); 
            $sqlquery = "SELECT * FROM games WHERE id IN ($array)";
            $stmt = $this->connection->prepare($sqlquery);

            $i = 1;
            foreach($gamesInCart as $key => $value) {
                $stmt->bindValue($i, $key, PDO::PARAM_INT);
                $i++;
            }
            $stmt->execute();
            $games = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $games;

        } catch (PDOException $e) {
            echo $e;
        }
    }

    function addGameToCart($id, $quantity)
    {
        $stmt = $this->connection->prepare("SELECT * FROM games WHERE id=:id");

        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Game');
        $games = $stmt->fetchAll();


        if ($games && $quantity > 0) {
            if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {

                if (array_key_exists($id, $_SESSION['cart'])) {
                    $_SESSION['cart'][$id] += $quantity;
                } 
                else {
                    $_SESSION['cart'][$id] = $quantity;
                }
            } 
            else { 
                $_SESSION['cart'] = array($id => $quantity);
            }
        }
    }
}