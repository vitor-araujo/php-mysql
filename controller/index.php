<?php 

//select a method of this class, wich brings everything from a inputed table (in this case 'todos' table)
$task = $db->selectAll('todos');
// var_dumps the elements of this table
// var_dump($task);
require 'view/index.view.php';

 ?>