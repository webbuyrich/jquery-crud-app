<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Insert, Update, Delete using jQuery, PHP and MySQL</title>

    <!-- Bootstrap -->
    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="container">
  		    <div class="row page-header">
  			    <h2>Employee Records</h2>
  			    <button class="btn btn-info" type="button" id="btn-add"><span class="glyphicon glyphicon-pencil"> Add Employee</span></button>
  			    <button class="btn btn-info" type="button" id="btn-view"><span class="glyphicon glyphicon-eye-open"> View Employee</span></button>
  			</div>
  			<div class="row content-loader"></div>
  			<div class="row">  			
  			  <table class="table table-striped">
  			    <thead>
  			      <tr>
  			        <th>#</th>
  			        <th>First Name</th>
  			        <th>Last Name</th>
  			        <th>Username</th>
  			      </tr>
  			    </thead>
  			    <tbody>
  			      <tr>
  			        <td>1</td>
  			        <td>Mark</td>
  			        <td>Otto</td>
  			        <td>@mdo</td>
  			      </tr>
  			      <tr>
  			        <td>2</td>
  			        <td>Jacob</td>
  			        <td>Thornton</td>
  			        <td>@fat</td>
  			      </tr>
  			      <tr>
  			        <td>3</td>
  			        <td>Larry</td>
  			        <td>the Bird</td>
  			        <td>@twitter</td>
  			      </tr>
  			    </tbody>
  			  </table>  			
  			</div>
  	</div>
    

    
  </body>
  <script src="includes/js/jquery-1.12.0.min.js"></script>
  <script src="includes/js/bootstrap.min.js"></script>
  <script src="includes/js/script.js"></script>
</html>