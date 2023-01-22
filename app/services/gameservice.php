<?php
require __DIR__ . '/../repositories/gamerepository.php';

class GameService {
    public function getAll() {
        $repository = new GameRepository();
        return $repository->getAll();
    }

    public function getOne($id) {
        $repository = new GameRepository();
        return $repository->getOne($id);
    }

    public function getAllGamesInCart($gamesInCart){
        $repository = new GameRepository();
        return $repository->getAllGamesInCart($gamesInCart);
    }

    public function addGameToCart($id, $quantity) {
        $repository = new GameRepository();
        $repository->addGameToCart($id, $quantity);
    }
}