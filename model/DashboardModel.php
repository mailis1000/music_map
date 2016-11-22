<?php


class DashboardModel extends Model
{

    /**
     * DashboardModel constructor.
     */
    public function __construct()
    {
      parent::__construct();
    }

    public function getBandList(){
        $statement = $this->db->
        prepare('SELECT * FROM bands');
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();

        $data = $statement->fetchAll();

        return $data;
    }

    public function saveBand($band){
        $band = array(
           'bandname'=>$this->sanitize($band['bandname']),
           'genre'=>$this->sanitize($band['genre']) ,
           'country'=>$this->sanitize($band['country'])
        );

        $statement = $this->db->prepare(
            "INSERT INTO bands
(bandname, genre, country)
VALUES(:bandname, :genre, :country)"
        );

        return $statement->execute($band);
    }

    /*public function findBand($name=''){
        $statement = $this->db->
        prepare("SELECT * FROM bands WHERE bandname=Placebo");
        $statement->bindValue(1, $bandname);
        $statement->bindValue(2, $bandname);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();

        $data = $statement->fetchAll();

        return $data;
    }*/
}