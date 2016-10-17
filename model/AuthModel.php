<?php
date_default_timezone_set('Europe/Helsinki');

class AuthModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function auth($username, $password)
    {
        $statement = $this->db->prepare(
            'SELECT * FROM login
WHERE username = :username'
        );
        $statement->bindValue(':username', $username);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();
        $result = $statement->fetchAll();

        $salt =$result[0]['salt'];
        $hash= $result[0]['password'];

        $hash2 = md5($salt.$password.$salt);
        return ($hash === $hash2) ? true : false;
    }

    public function addlogin($username, $password, $email){

        $salt = $this->getSalt(10);
        $password = md5($salt.$password.$salt);

        $statement = $this->db->prepare(
            "INSERT INTO login
(username, password, email, salt, reg_date)
VALUES(:username, :password, :email, :salt, :reg_date)"
        );
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':salt', $salt);
        $statement->bindValue(':reg_date', date('Y-m-d H:i:s'));

        return $statement->execute();
    }

    private function getSalt($len){
        return substr(str_shuffle('kjgdhseloiutyw3498theakfjhseaoituwyehfgikjawhf'),0,$len);
    }

    public function findBand($bandname=''){
        $statement = $this->db->
        prepare("SELECT * FROM bands WHERE bandname=?");
        $statement->bindValue(1, $bandname);
        $statement->bindValue(2, $bandname);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();

        $data = $statement->fetchAll();

        return $data;
    }

}