<?php

require_once 'dbconfig.php';

if($_POST){

  $emp_name = $_POST['emp_name'];
  $emp_dept = $_POST['emp_dept'];
  $emp_salary = $_POST['emp_salary'];

  try{

    $stmt = $db_con->prepare(
      'INSERT INTO tbl_employees(emp_name, emp_dept, emp_salary)
      VALUES (:ename, :edept, :esalary)'
      );
    $stmt->bindParam(':ename', $emp_name);
    $stmt->bindParam(':edept', $emp_dept);
    $stmt->bindParam(':esalar', $emp_salary);

    //Check to see if data is posted to DB
    if($stmt->execute()){
      echo $emp_name.' has been added to the '. $emp_dept . ' Department.';
    }else{
      echo 'Sorry, the user was not added. There was a problem. Please retry again.';
    }

  }
  catch(PDOException $e){
   debug_to_console($e->getMessage());
  }

}

?>