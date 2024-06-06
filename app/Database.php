<?php
class Database{

    public $isConnected;

    protected $database;
    // connecting to the database at first run or progress with __construct
    public function __construct($host = DB_HOST, $user = DB_USER, $password = DB_PASS, $database = DB_NAME){
        $this->isConnected = true;

        try {
            //code...
            $this->database = new PDO ("mysqli:host={$host}; dbname")
        } catch (\Throwable $th) {
            //throw $th;
        }
    }


}