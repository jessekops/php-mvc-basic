<?php
require __DIR__ . '/../repositories/adminrepository.php';

class AdminService {
    public function getAll() {
        $repository = new AdminRepository();
        return $repository->getAll();
    }

    public function insert($opponent, $date, $price, $time) {
        $repository = new AdminRepository();
        $repository->insert($opponent, $date, $price, $time);
    }

    public function updateOne($id, $opponent, $date, $price, $time) {
        $repository = new AdminRepository();
        $repository->updateOne($id, $opponent, $date, $price, $time);
    }

    public function deleteOne($id) {
        $repository = new AdminRepository();
        $repository->deleteOne($id);
    }
}