<?php
require __DIR__ . '/../services/loginservice.php';

class LoginController
{
    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService();
    }

    public function index()
    {
        require __DIR__ . '/../views/login/index.php';
    }

    public function validate()
    {

        // check for POST var
        if (isset($_POST['submit'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); 

            $userName = $_POST['userName'];
            $password = $_POST['passWord'];

            $count = $this->loginService->checkUser($userName, $password);

            if ($count == 1) {
                header('Location: /admin');
            } else {
                var_dump($password);
            }
        }
    }

    public function getUser($userName)
    {
        return $this->loginService->getUser($userName);
    }
}