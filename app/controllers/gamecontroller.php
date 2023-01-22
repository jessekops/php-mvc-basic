<?php
require __DIR__ . '/../services/gameservice.php';

class GameController
{
    private $gameservice;

    function __construct()
    {
        
        $this->gameservice = new GameService();
    }

    public function index()
    {
        $model = $this->gameservice->getAll();

        require __DIR__ . '/../views/game/index.php';
    }

    
}