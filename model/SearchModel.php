<?php


class SearchModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function findBand($bandname){

        $statement = $this->db->
        prepare(
            'SELECT * FROM bands
WHERE bandname = :bandname');

        $statement->bindValue(':bandname', $bandname);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();

        $result = $statement->fetchAll();

        return $result;


    }
}