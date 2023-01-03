<?php
require __DIR__ . '/../repositories/loginrepository.php';

class LoginService {
    public function checkUser($userName, $password) {
        $repositoy = new LoginRepository();
        return $repositoy->checkUser($userName, $password);
    }

    public function getUser($userName) {
        $repository = new LoginRepository();
        return $repository->getUser($userName);
    }
}