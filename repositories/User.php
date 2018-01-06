<?php

namespace respositories;

require '../db/DbConnection.php';

use db;

class User {

    private $connection = null;

    function __construct() {
        $this->connection = \db\DbConnection::getInstance();
    }

    function getUsers() {
        $sql = "SELECT * FROM user";
        $statement = $this->connection->prepare($sql);
        if( !$statement ) {
            throw new \Exception('Prepare failed: ' . $statement->error);
        } 
        
        $result = $statement->execute();
        
        
        if( !$result ) {
            throw new \Exception('Execute failed: ' . $statement->error);
        }

        $result = $statement->get_result();
        if ($result->num_rows === 0) {
            throw new \Exception('No results found');
            return;
        }
        while ($row = $result->fetch_assoc()) {
            var_dump($row);
        }
//      $stmt->bind_param("sss", $firstname, $lastname, $email);
    }

}
