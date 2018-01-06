<?php

use repositories\User;

require_once('../repositories/User.php');
$user = new respositories\User();
$user->getUsers();


//load front end
require_once('../view/Home.php');

\db\DbConnection::closeConnection();