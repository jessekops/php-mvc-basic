<?php
require __DIR__ . '/repository.php';
require __DIR__ . '/../models/user.php';

class LoginRepository extends Repository
{

    function checkUser($userName, $password)
    {
        try {
            $sqlquery = "SELECT COUNT(id) FROM users WHERE userName=:userName AND passWord=:passWord";
            $stmt = $this->connection->prepare($sqlquery);

            $stmt->bindParam(':userName', $userName);
            $stmt->bindParam(':passWord', $password);

            $stmt->execute();
            $count = $stmt->fetchColumn();

            return $count; 
        } catch (PDOException $e) {
            echo $e;
        }
    }


    public function getUser($userName) {
        try {
            $sqlquery = "SELECT * FROM users WHERE userName=:userName";
            $stmt = $this->connection->prepare($sqlquery);

            $stmt->bindParam(':userName', $userName);

            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'User');
            $user = $stmt->fetch();

            return $user;

        } catch (PDOException $e) {
            echo $e;
        }
    }
}