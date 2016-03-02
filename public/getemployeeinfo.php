<?php

// Connect to DB in Above Directory for security
require_once('../mysql_connect.php');

// Define our Query statement for Database
$query = "SELECT emp_no, birth_date, first_name, last_name, gender, hire_date FROM employees";

?>
