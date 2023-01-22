<?php
require __DIR__ . '/../../services/gameservice.php';

class GameController
{

    private $gameService;

    function __construct()
    {
        $this->gameService = new GameService();
    }

    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $games = $this->gameService->getAll();
            echo json_encode($games); 
        }
    }
}