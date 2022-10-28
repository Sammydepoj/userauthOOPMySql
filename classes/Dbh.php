<?php

class dbh {

    public $hostname ;
    public $username ;
    public $password ;
    public $dbname ;

    protected function connect(){
        $this->hostname='localhost';
        $this->username='root';
        $this->password='';
        $this->dbname='zuriphp';
        $connect_db = new mysqli($this->hostname,$this->username,$this->password,$this->dbname);

        return $connect_db;


    }
}


