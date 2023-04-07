<?php
require __DIR__ . '/../services/adminservice.php';

class AdminController
{
    private $adminservice;

    function __construct()
    {
        $this->adminservice = new AdminService();
    }

    public function index()
    {
        $model = $this->adminservice->getAll();

        require __DIR__ . '/../views/admin/index.php';
    }

    public function insert()
    {
        if (isset($_POST['opponent'])) {
            $_POST = filter_input_array(INPUT_POST);

            $opponent = htmlspecialchars($_POST['opponent']);
            $date = htmlspecialchars($_POST['date']);
            $price = htmlspecialchars($_POST['price']);
            $time = htmlspecialchars($_POST['time']);

            if (!empty($opponent) && !empty($date) && !empty($price) && !empty($time)) {
                $this->adminservice->insert($opponent, $date, $price, $time);
                header('Location: /admin');
            } else {
                echo "Please enter all fields";
            }
        }
    }

    public function updateOne()
    {
        if (isset($_POST['edit'])) {
            $_POST = filter_input_array(INPUT_POST);

            $id = htmlspecialchars($_POST['gameId']);
            $opponent = htmlspecialchars($_POST['opponent']);
            $date = htmlspecialchars($_POST['date']);
            $price = htmlspecialchars($_POST['price']);
            $time = htmlspecialchars($_POST['time']);

            if (!empty($id) && !empty($opponent) && !empty($date) && !empty($price) && !empty($time)) {
                $this->adminservice->updateOne($id, $opponent, $date, $price, $time);

                header('Location: /admin');
            } else {
                echo "Please enter all fields";
            }
        }
    }

    public function deleteOne()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $this->adminservice->deleteOne($id);

            header('Location: /admin');
        }
    }
}