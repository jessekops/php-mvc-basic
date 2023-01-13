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
        session_start();
        if (!isset($_SESSION['cart']))
            $_SESSION['cart']=array();
        require __DIR__ . '/../views/cart/index.php';
    }

    public function addGameToCart()
    {
        if (isset($_GET['id'])) {
            $_SESSION['cart'] = array();

            $id = $_GET['id'];
            array_push($_SESSION['cart'], $id);
            // $_SESSION['games'][] = $id;
            // Print_r ($_SESSION['cart']);
            header('Location: /cart');
        }
    }

    private function getItemsFromCart()
    {
        $cart = array();
        foreach ($_SESSION['cart'] as $key => $value) {
            $game = $this->gameservice->getOne($key);
            array_push($cart, array('opponent' => $game));
        }
        return $cart;
    }
}