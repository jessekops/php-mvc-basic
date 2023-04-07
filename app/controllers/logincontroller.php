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
        if (isset($_POST['submit'])) {
            $_POST = filter_input_array(INPUT_POST);

            $userName = htmlspecialchars($_POST['userName']);
            $password = htmlspecialchars($_POST['passWord']);

            $count = $this->loginService->checkUser($userName, $password);

            if ($count == 1) {
                header('Location: /admin');
            } else {
                echo "Wrong username/password combination";
            }
        }
    }

    public function getUser($userName)
    {
        return $this->loginService->getUser($userName);
    }
}