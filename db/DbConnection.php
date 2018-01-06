<?php

namespace db;

require_once('../config/Db.php');

use config\Db;

class DbConnection {

    static $connection = null;

    protected function __construct() {
        self::__construct();
    }

    static function getInstance() {
        if (self::$connection === null) {
            self::$connection = self::createConnection();
        }
        
        return self::$connection;
    }

    static function createConnection() {
        $connection = new \mysqli(Db::HOST, Db::USER, Db::PASSWORD, Db::DB_NAME);
        if( !$connection ) {
            throw new \Exception('Could not connect to the database');
        } 
        
        return $connection;
           
    }
    
    static function closeConnection() {
        self::$connection->close();
    }

}
