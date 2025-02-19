<?php
require __DIR__ . '/../services/checkoutservice.php';
class CheckoutController
{
    private $checkoutservice;

    function __construct()
    {
        $this->checkoutservice = new CheckoutService();
    }
    public function index()
    {
        require __DIR__ . '/../views/checkout/index.php';
    }

    public function insert()
    {
        if (isset($_POST['submit'])) {
            $_POST = filter_input_array(INPUT_POST);
            $firstName = htmlspecialchars($_POST['firstName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $emailAddress = htmlspecialchars($_POST['emailAddress']);
            $dateOrdered = date('Y-m-d');
            $price = $_GET['total'];

            if (!empty($firstName) && !empty($lastName) && !empty($emailAddress) && !empty($dateOrdered) && !empty($price)) {
                $this->checkoutservice->insert($firstName, $lastName, $emailAddress, $dateOrdered, $price);
                unset($_SESSION['cart']);
                header('Location: /');
            } else {
                echo "Please enter all fields";
            }
        }
    }
}