<?php

require_once 'conn.php';

if (isset($_POST['submit'])) {
	// code...

$sql = "INSERT INTO `ImranJino` (`fname`, `phonenumber`, `sex`, `age`, `occupation`, `government`, `ward`)
VALUES ('{$_POST['fname']}', '{$_POST['phonenumber']}', '{$_POST['sex']}', '{$_POST['age']}', '{$_POST['occupation']}', '{$_POST['government']}', '{$_POST['ward']}')";

$conn->exec($sql);


echo "record created";

}

?>


