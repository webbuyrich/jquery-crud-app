  			  <table class="table table-striped">
  			    <thead>
  			      <tr>
  			        
  			        <th>Employee ID</th>
  			        <th>Employee Name</th>
  			        <th>Department</th>
  			        <th>Salary</th>
  			        <th>Edit</th>
  			        <th>Delete</th>
  			      </tr>
  			    </thead>
  			    <tbody>
  			      <?php
  			      	require_once 'dbconfig.php';
  			      	$stmt = $db_con->prepare('SELECT * from `tbl_employees` ORDER BY `emp_id` ASC');
  			      	$stmt->execute();
  			      	while($row=$stmt->fetch(PDO::FETCH_ASSOC)){ 			      	
				  
  			      ?>
				   <tr>				   	
				   	<td><?php echo $row['emp_id']; ?></td>
				   	<td><?php echo $row['emp_name']; ?></td>
				   	<td><?php echo $row['emp_dept']; ?></td>
				   	<td><?php echo $row['emp_salary']; ?></td>
				   	<td class="text-center"><a id="<?php echo $row['emp_empid']; ?>" class="edit-link" title="edit" href=""><button class="btn btn-xs btn-warning" type="submit" id="btn-edit"><span class="glyphicon glyphicon-pencil" title="Edit User"></span></button></a></td>
				   	<td class="text-center"><a id="<?php echo $row['emp_empid']; ?>" class="delete-link" title="edit" href=""><button class="btn btn-xs btn-danger" type="submit" id="btn-edit"><span class="glyphicon glyphicon-remove" title="Edit User"></span></button></a></td>
				   </tr>
  			      <?php }?>
  			    </tbody>
  			  </table>  			