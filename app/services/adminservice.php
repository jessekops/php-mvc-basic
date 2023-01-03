<?php
require __DIR__ . '/../repositories/adminrepository.php';

class AdminService {
    public function getAll() {
        $repository = new AdminRepository();
        return $repository->getAll();
    }

    public function insert($opponent, $date, $nrOfTickets, $price, $time) {
        $repository = new AdminRepository();
        $repository->insert($opponent, $date, $nrOfTickets, $price, $time);
    }

    public function updateOne($id, $opponent, $date, $nrOfTickets, $price, $time) {
        $repository = new AdminRepository();
        $repository->updateOne($id, $opponent, $date, $nrOfTickets, $price, $time);
    }

    public function deleteOne($id) {
        $repository = new AdminRepository();
        $repository->deleteOne($id);
    }
}