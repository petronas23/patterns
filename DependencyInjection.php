<?php
class DB{
    public function connect(){

    }

    public function select(){}

    public function insert($data)
    {
        print_r($data);
        #INSERT INTO
    }
}

class App{

    private $db = null;

    public function __construct()
    {
        $this->db = new DB();
    }

    public function writeToDB($data)
    {
        $this->db->insert($data);
    }
}

$app = new App();
$app->writeToDB(['Some', 'text', 'or', 'other']);