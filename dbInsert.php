<?php
/* Module Creation
** Author: Karari E.Karari
** Date: 04/03/2024
** Purpose: Training
*/

/* Module Description
** This module illustrates use of the INSERT command object used to
** to write data to the database. in this case, the daat is read 
** from the admissions form and written into the 
** admission table in school DB.   
** The connection and th edata are defined in separate modules,
** and incorporated using to this code using the 'include'. the
** alternative is wruite all the code in one file. 
** ---------Please Note------------
// ** for this module to work without modification:
** 1. your web and SQL server must be running
** 2. Your admission form and all the PHP files must be hosted in the server
** 3. Your admission form fields MUST have names similar to those in dbFields.PHP,
**    That is from txtName to telNumber.
** 4. Your variables MUST have the same name as those in dbFields.PHP
**    That is, from $std_name to $phone
** 5. Your connection object MUST have the same database attributes like those in dbconnection.PHP
** --------Customization------------
** You can customize this files to fit your system if you understand the workings. 
*/

#establish connection
include 'dbconnection.php';
#collect values from the form
include 'dbFields.php';

#define the query string
$sql = "INSERT INTO employees (employee_id, first_name, last_name, role_, department, email, salary, hire_date) VALUES ('$employee_id', '$first_name', '$last_name', '$role_', '$department', '$email', '$salary', '$hire_date')";


#test the query
if (mysqli_query($conn, $sql)) {
  echo "A new record has been created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
#disconnect
mysqli_close($conn);
?>




<?php
include 'dbconnection.php';
#collect values from the form
include 'dbFields.php';

#define the query string
$sql = "INSERT INTO add_vehicles (vin_number, vehicle_id, make, model, manufacturing_year, color, mileage, price, vehicle_condition) VALUES ('$vin_number', '$vehicle_id', '$make', '$model', '$manufacturing_year', '$color', '$mileage', '$price', '$vehicle_condition')";


#test the query
if (mysqli_query($conn, $sql)) {
  echo "A new record has been created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
#disconnect
mysqli_close($conn);
