<?php
require __DIR__ . '/../services/gameservice.php';
class CartController
{
    private $gameservice;

    function __construct()
    {
        $this->gameservice = new GameService();
    }
    public function index()
    {
        $gamesInCart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

        if ($gamesInCart) {
            $model = $this->gameservice->getAllGamesInCart($gamesInCart);
        }
        else { 
            $model = array();
        }

        require __DIR__ . '/../views/cart/index.php';
    }

    public function addGameToCart()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $id = (int)$_GET['id'];
            $quantity = 1;
            $this->gameservice->addGameToCart($id, $quantity);
            header('location: /cart');
        }
        else {
            echo "failed";
        }
        
    }

    public function deleteOneFromSession()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            unset($_SESSION['cart'][$id]);
            header('Location: /cart');
        }
    }
}