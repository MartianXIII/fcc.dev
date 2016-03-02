<?php

// Connect to DB in Above Directory for security
require_once('../mysql_connect.php');

// Define our Query statement for Database
$query = "SELECT emp_no, birth_date, first_name, last_name, gender, hire_date FROM employees";

// Establish response and pass database and prepaired query
$response = @mysqli_query($dbc, $query);

if($response)
{
  echo '<table
  cellspacing="5" cellpadding="8">
  <tr><td><b>Employee No<b></td>
  <td><b>Birth Date<b></td>
  <td><b>First Name<b></td>
  <td><b>Last Name<b></td>
  <td><b>Gender<b></td>
  <td><b>Hire Date<b></td></tr>';

?>
