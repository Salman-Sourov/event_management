<?php

	require_once "connection.php";
	
	if(isset($_REQUEST['delete_id']))
	{
		// select image from db to delete
		$id=$_REQUEST['delete_id'];	//get delete_id and store in $id variable
		
		$select_stmt= $db->prepare('SELECT * FROM corpo_silver WHERE id =:id');	//sql select query
		$select_stmt->bindParam(':id',$id);
		$select_stmt->execute();
		$row=$select_stmt->fetch(PDO::FETCH_ASSOC);
		unlink("upload/".$row['image']); //unlink function permanently remove your file
		
		//delete an orignal record from db
		$delete_stmt = $db->prepare('DELETE FROM corpo_silver WHERE id =:id');
		$delete_stmt->bindParam(':id',$id);
		$delete_stmt->execute();
		
		header("Location:del_cor_silver.php");
	}
	
?>
	
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, maximum-scale=2.0">
<title>Dellete Corporate Silver Package</title>

<link rel="stylesheet" href="css/bootstrap.css">		
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<script src="js/jquery-1.12.4-jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
		
</head>

	<div class="wrapper">
	<div class="container">
	<header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a class="navbar-brand" href="admin_home.php">Admin Panel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" href="admin_home.php">Home</a>
              </li>
			  
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="add_birthday.php">Birthday</a>
                  <a class="dropdown-item" href="add_weeding.php">Weeding</a>
                    <a class="dropdown-item" href="add_corporate.php">Corporate</a>
             
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Delete</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="del_birthday.php">Birthday</a>
                  <a class="dropdown-item" href="del_weeding.php">Weeding</a>
                    <a class="dropdown-item" href="del_corporate.php">Corporate</a>
                </div>
              </li>

                 <li class="nav-item">
                <a class="nav-link" href="logout1.php">logout</a>
              </li>
            </ul>  
          </div>
        </div>
      </nav>
    </header>
	
	<body>
	<div class="wrapper">
	
	<div class="container">
			
		<div class="col-lg-12">
			<div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
											<th>ID</th>
                                            <th>Name</th>
                                            <th>File</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$select_stmt=$db->prepare("SELECT * FROM corpo_silver");	//sql select query
									$select_stmt->execute();
									while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))
									{
									?>
                                        <tr>
											<td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><img src="images/<?php echo $row['image']; ?>" width="100px" height="60px"></td>
                                            <td><a href="?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
									}
									?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
				
		</div>
		
	</div>
			
	</div>
									
	</body>
</html>