<?php 

$config = require 'config.php';
require 'core/router.php';
require 'core/database/connection.php';
require 'core/database/querybuilder.php';


return new QueryBuilder(
	//create a new instance of the query where the pdo object is already the connection instance
	Connection::make($config['database'])

);


 ?>