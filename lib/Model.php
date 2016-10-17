<?php

class Model
{

    public function __construct()
    {
        $this->db=new Database();
    }

    public function sanitize($string){
        $string=stripslashes($string);
        $string=strip_tags($string);
        $string=htmlentities($string);
        return $string;
    }
}