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
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            if (isset($_POST['opponent'])) {
                $opponent = $_POST['opponent'];
            }

            if (isset($_POST['date'])) {
                $date = $_POST['date'];
            }

            if (isset($_POST['nrOfTickets'])) {
                $nrOfTickets = $_POST['nrOfTickets'];
            }

            if (isset($_POST['price'])) {
                $price = $_POST['price'];
            }

            if (isset($_POST['time'])) {
                $time = $_POST['time'];
            }

            if (!empty($opponent) && !empty($date) && !empty($nrOfTickets) && !empty($price) && !empty($time)) {
                $this->adminservice->insert($opponent, $date, $nrOfTickets, $price, $time);
                header('Location: /admin');
            } else {
                // display error
            }
        }
    }

    public function updateOne() {
        if (isset($_POST['edit'])) {
            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW); 

            $id = $_POST['gameId'];
            $opponent = $_POST['opponent'];
            $date = $_POST['date'];
            $nrOfTickets = $_POST['nrOfTickets'];
            $price = $_POST['price'];
            $time = $_POST['time'];

            if (!empty($id) && !empty($opponent) && !empty($date) && !empty($nrOfTickets) && !empty($price) && !empty($time)) {
                $this->adminservice->updateOne($id, $opponent, $date, $nrOfTickets, $price, $time);

                header('Location: /admin');
            }
            else {
            }
        }
    }

    public function deleteOne() {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $this->adminservice->deleteOne($id);

            header('Location: /admin');
        }
    }
}