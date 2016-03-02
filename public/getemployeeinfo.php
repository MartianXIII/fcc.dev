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


// loop fetching data until all data is returned
while($row = mysqli_fetch_array($response))
{
  echo '<tr><td>' .
  $row['emp_no'] . '</td><td>' .
  $row['birth_date'] . '</td><td>' .
  $row['first_name'] . '</td><td>' .
  $row['last_name'] . '</td><td>' .
  $row['gender'] . '</td><td>' .
  $row['hire_date'] . '</td>';

  echo '</tr>';
}

echo '</table>';
} else {
  // Error log message
  echo "Couldn't issue database query";
  // error passing database error
  echo mysqli_error($dbc);
}
?>
