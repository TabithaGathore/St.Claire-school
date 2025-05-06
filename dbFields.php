<?php
/* Module Creation
** Author: Karari E.Karari
** Date: 04/03/2024
** Purpose: Training
*/

/* Module Description
** This module reads data from the form post method
** a field at a time (array style element retrieval)
** and assigns it to corresponding variables.
** The variables become the values in query string 
** VALUES section of the INSERT command
*/
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$carModel = $_POST['carModel'];
$budget = $_POST['budget'];
$messages = $_POST['messages'];

echo "Data from the form picked successfully</br>";
?>
