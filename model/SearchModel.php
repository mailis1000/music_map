<?php


class SearchModel extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    //siin otsib bändinime järgi
    //siin saab teha sqli muudatused jms, et ta otsiks ka muid asju kui ainult bändi nime
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