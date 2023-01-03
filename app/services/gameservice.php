<?php
require __DIR__ . '/../repositories/gamerepository.php';

class GameService {
    public function getAll() {
        $repository = new GameRepository();
        return $repository->getAll();
    }
}